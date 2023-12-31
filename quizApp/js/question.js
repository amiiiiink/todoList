// function Question(questionText, answers, correctAnswer) {
//     this.questionText = questionText;
//     this.answers = answers;
//     this.correctAnswer = correctAnswer;
// }

// Question.prototype.checkAnswer = function (answer) {
//     return answer === this.correctAnswer;
// }           


class Question {
    constructor(questionText, answers, correctAnswer) {
        this.questionText = questionText;
        this.answers = answers;
        this.correctAnswer = correctAnswer;
    }

    checkAnswer(answer){
        return answer === this.correctAnswer;
    }
}

let questions = [
    new Question("What is the first name of Mr poustini?", {
        a: "mehdi",
        b: "mahdi",
        c: "mohammad mahdi"
    }, "c"),
    new Question("چه کسی میداند آی پی چیست؟", {
        a: "آرش",
        b: "جلیل",
        c: "صدرا"
    }, "c"),
    new Question("پسته پسته ی؟", {
        a: "بیگی",
        b: "موسوی",
        c: "اکبری"
    }, "c"),
    new Question("what is the best football team in iran? : ", {
        a: "Sepahan",
        b: "Esteghlal",
        c: "shams azar"
    }, "b"),
    new Question("When Mr Poustini got married?", {
        a: "in 2020",
        b: "in 2017",
        c: "parsal"
    }, "c")
];