@extends('Game.layout')
@section('content')
    <div class="menu">
        <button class="button"><i data-feather="play"></i> Start Quiz</button>
        <a href="/fun-game" class="back">Back</a>
    </div>

    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
            <h2>Tebak nama wayang</h2>
            <div class="content">
                <img src="" alt="" id="question">
            </div>
            <ul>
                <li>
                    <input type="radio" name="answer" id="a" class="answer" />
                    <label for="a" id="a_text">Answer</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="b" class="answer" />
                    <label for="b" id="b_text">Answer</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="c" class="answer" />
                    <label for="c" id="c_text">Answer</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="d" class="answer" />
                    <label for="d" id="d_text">Answer</label>
                </li>
            </ul>
        </div>
        <button id="submit">Submit</button>
    </div>
    <script src="/js/tebakGambar.js"></script>
@endsection
