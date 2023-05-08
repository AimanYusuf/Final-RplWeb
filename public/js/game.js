const quizData = [
  {
    question:
      "1.Wong sing neng sekolah, penggawehane ngulang murid-murid yoiku?",
    a: "Polisi",
    b: "Tentara",
    c: "Guru",
    d: "Satpam",
    corect: "c",
  },
  {
    question: "2.Crita nyata diarani ?",
    a: "Novel",
    b: "FIktif",
    c: "Cerpen",
    d: "legenda",
    corect: "b",
  },
  {
    question:
      "3.Bu miyati ... marang putrane supaya sesuk makili gotong royong?",
    a: "ndawuhi",
    b: "nyuwun tulung",
    c: "ngandani",
    d: "ngaturi",
    corect: "d",
  },
  {
    question: "4.Eyang Kakung anggenipun badhe ... Jam pinten?",
    a: "lunga",
    b: "minggat",
    c: "tindak",
    d: "budhal",
    corect: "c",
  },
  {
    question:
      "5.Inggih pak, sadaya ... Bapak, waton Kula saged badhe Kula estokaken",
    a: "Panyuwunipun",
    b: "Dhawuhipun",
    c: "Aturipun",
    d: "Panyuwunan tulungipun",
    corect: "b",
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

  questionEls.innerText = currentQuizdata.question;
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
