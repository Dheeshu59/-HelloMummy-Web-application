// Questions

const questions = [
    {
        question_id: '0',
        question: 'If 1=3, 2=3, 3=5, 4=4, 5=4,Then, 6=?',
        options: [
            { option: 'One' },
            { option: 'Two' },
            { option:  'Three' },
        ],
        correct_answer: 'Three'
    },

    {
        question_id: '1',
        question: 'Add 8.563 and 4.8292.',
        options: [
            { option: '13.2922' },
            { option: '13.3922' },
            { option: '13.4922' },
        ],
        correct_answer: '13.3922'
    },

    {
        question_id: '2',
        question: 'I am an odd number. Take away one letter and I become even. What number am I?',
        options: [
            { option: 'eight' },
            { option: 'Seven' },
            { option: 'eleven' },
        ],
        correct_answer: 'Seven'
    },
    {
        question_id: '3',
        question: 'Sally is 54 years old and her mother is 80, how many years ago was Sally’s mother times her age?',
        options: [
            { option: '41 years ago' },
            { option: '39 years ago' },
            { option: '30 years ago' },
        ],
        correct_answer: '41 years ago'
    },
    {
        question_id: '4',
        question: 'Which 3 numbers have the same answer whether they’re added or multiplied together?',
        options: [
            { option: '1, 2 and 5' },
            { option: '1, 4 and 3' },
            { option: '1, 2 and 3' },
        ],
        correct_answer: '1, 2 and 3'
    },
    {
        question_id: '5',
        question: 'How many feet are in a mile? ',
        options: [
            { option: '5280' },
            { option: '5380' },
            { option: '5260' },
        ],
        correct_answer: '5280'
    },
    {
        question_id: '6',
        question: ' Solve  - 15+ (-5x) =0',
        options: [
            { option: '-4' },
            { option: '-3' },
            { option: '-7' },
        ],
        correct_answer: '-3'
    },
    {
        question_id: '7',
        question: 'What is 1.92÷3',
        options: [
            { option: '0.64' },
            { option: '0.63' },
            { option: '0.68' },
        ],
        correct_answer: '0.64'
    },
   
    {
        question_id: '8',
        question: 'Look at this series: 36, 34, 30, 28, 24, … What number should come next?',
        options: [
            { option: '22' },
            { option: '24' },
            { option: '30 ' },
        ],
        correct_answer: '22'
    },
    {
        question_id: '9',
        question: 'The day before yesterday I was 25. The next year I will be 28. This is true only one day in a year. What day is my Birthday? ',
        options: [
            { option: 'January 31' },
            { option: 'December 31' },
            { option: 'October 31' },
        ],
        correct_answer: 'December 31'
    },
    
]



const starQuizBtn = document.querySelector(".start-quiz-btn");
const quizContainer = document.querySelector(".quiz-container");
const nextBtn = document.querySelector(".next-btn");
const quizResultContainer = document.querySelector(".quiz-result-container");
const quizOverlay = document.querySelector(".quiz-overlay");
const quizCloseBtn = document.querySelector(".quiz-close-btn");
const retakeQuizBtn = document.querySelector(".retake-quiz-btn");
const optionsContainer = document.querySelector(".options-container");
const resultHeading = document.querySelector(".result-heading");
const scoreText = document.querySelector(".score-text");
const question = document.querySelector(".question");




let questionNumber = 0;
let totalQuestion = questions.length;
let userAnswer = "";
let userScore = 0;


const init = () => {
    questionNumber = 0;
    userScore = 0;
    nextBtn.innerText = "Next";
}


// Start Button

starQuizBtn.addEventListener("click", () => {
    init();
    quizContainer.classList.add("active");
    quizOverlay.classList.add("active");
    displayQuestions(questionNumber);
})


// Next Button

nextBtn.addEventListener("click", () => {
    checkAnswer();
    questionNumber++;
    if (questionNumber == totalQuestion - 1) {
        nextBtn.innerText = "Finish";
    }
    if (questionNumber < totalQuestion) {
        displayQuestions(questionNumber);
    } else {
        quizResultContainer.classList.add("active");
        showResult();
        quizContainer.classList.remove("active");
    }
})


// Close Button

quizCloseBtn.addEventListener("click", () => {
    quizResultContainer.classList.remove("active");
    quizContainer.classList.remove("active");
    quizOverlay.classList.remove("active");
})


// Retake Quiz Button

retakeQuizBtn.addEventListener("click", () => {
    init();
    quizResultContainer.classList.remove("active");
    quizContainer.classList.add("active");
    displayQuestions(questionNumber);
})


// Store Answer

const storeAnswer = (o) => {
    if (o) {
        userAnswer = o.target.nextElementSibling.innerText;
    } else {
        userAnswer = "";
    }
}


// Check Answer

const checkAnswer = () => {
    if (userAnswer == questions[questionNumber].correct_answer) {
        userScore++;
    } 
}


// Display Questions

const displayQuestions = (qNo) => {
    question.innerText = questions[qNo].question;

    optionsContainer.innerHTML = "";

    questions[qNo].options.forEach((o, oIndex)=> {
        const optionRadioButton = document.createElement("input");
        optionRadioButton.type = "radio";
        let optionId = "option" + oIndex;
        optionRadioButton.id = optionId;
        optionRadioButton.name = "option";
        optionRadioButton.addEventListener("change", storeAnswer);

        const optionLabel = document.createElement("label");
        optionLabel.htmlFor = optionId;
        optionLabel.classList.add("option");
        optionLabel.innerText = o.option;

        optionsContainer.appendChild(optionRadioButton);
        optionsContainer.appendChild(optionLabel);
    })
}

displayQuestions(questionNumber);


// Show the result

const showResult = () => {
    let percentage = (userScore/totalQuestion) * 100;

    if (percentage >= 60) {
        resultHeading.innerText = "Congratulations!";
    } else {
        resultHeading.innerText = "You can do better";
    }

    scoreText.innerText = `You have scored ${userScore} out of ${totalQuestion}.`;
}