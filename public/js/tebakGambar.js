const quizData = [
    {
        question: "/img/arjuna.png",
        a: "Bagong",
        b: "Basudewa",
        c: "Cakil",
        d: "Arjuna",
        corect: "d",
    },
    {
        question: "/img/nakula.jpg",
        a: "Sadewa",
        b: "Nakula",
        c: "Yudistira",
        d: "Widura",
        corect: "b",
    },
    {
        question: "/img/gatotKaca.jpg",
        a: "Yudistira",
        b: "Widura",
        c: "Nakula",
        d: "Gatot Kaca",
        corect: "d",
    },
    {
        question: "/img/basupati.jpg",
        a: "Gatot kaca",
        b: "Nakula",
        c: "Sadewa",
        d: "Basu Pati",
        corect: "d",
    },
    {
        question: "/img/antasena.jpg",
        a: "Antasena",
        b: "Sadewa",
        c: "Bagong",
        d: "Arjuna",
        corect: "a",
    },
];

const start = document.querySelector(".button");
const back = document.querySelector(".back");
const questionContainer = document.querySelector(".quiz-container");

start.addEventListener("click", () => {
    questionContainer.style.display = "block";
    start.style.display = "none";
    back.style.display = "none";
});

const quiz = document.getElementById("quiz");
const answerEls = document.querySelectorAll(".answer");
const questionEls = document.querySelector("#question");
const a_text = document.querySelector("#a_text");
const b_text = document.querySelector("#b_text");
const c_text = document.querySelector("#c_text");
const d_text = document.querySelector("#d_text");
const submit = document.querySelector("#submit");

let curentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz() {
    deselectAnswer();

    const currentQuizdata = quizData[curentQuiz];

    questionEls.src = currentQuizdata.question;
    a_text.innerText = currentQuizdata.a;
    b_text.innerText = currentQuizdata.b;
    c_text.innerText = currentQuizdata.c;
    d_text.innerText = currentQuizdata.d;
}

function deselectAnswer() {
    answerEls.forEach((answerEl) => (answerEl.checked = false));
}

function getSelect() {
    let answer;

    answerEls.forEach((answerEls) => {
        if (answerEls.checked) {
            answer = answerEls.id;
        }
    });

    return answer;
}

submit.addEventListener("click", () => {
    const answer = getSelect();
    if (answer) {
        if (answer === quizData[curentQuiz].corect) {
            score++;
        }

        curentQuiz++;

        if (curentQuiz < quizData.length) {
            loadQuiz();
        } else {
            questionContainer.innerHTML = `
        <i data-feather="thumbs-up" class="icon" ></i>
        <h2 class="final">Your Answered ${score}/${quizData.length} questions corectly </h2>
        <button onclick="location.reload()" id="submit">Reload</button>
        `;
        }
    }
});
