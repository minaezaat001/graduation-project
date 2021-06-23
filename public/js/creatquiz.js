// Set Vars
let allQuestions = JSON.parse(localStorage.getItem("allQuestions"));
let containerQuestions = document.querySelector(".questions");
let btnType = document.querySelector(".type_quesions");
let btnCreatNewQuestion = document.querySelector(".creat_question");

// Dif Questions
let Questions;
let title = document.querySelector(".inp_title");
let titleTf = document.querySelector(".inp_title_tf");
let answerA = document.querySelector(".inp_answer_a");
let answerB = document.querySelector(".inp_answer_b");
let answerC = document.querySelector(".inp_answer_c");
let answerD = document.querySelector(".inp_answer_d");
let answerTfA = document.querySelector(".inp_answer_a_tf");
let answerTfB = document.querySelector(".inp_answer_b_tf");
let showQuestions;

// Events
btnCreatNewQuestion.addEventListener("click", creatNewQuestion);
btnType.addEventListener("change", typeQuestion);

// Selected Type Question
function typeQuestion() {
    let true_area = document.querySelector(".true_area");
    let mulit = document.querySelector(".mulit");

    // Creat Questions
    if (btnType.value != "") {
        switch (btnType.value) {
            case "mulit":
                if (title.value != "" && answerA.value != "" && answerB.value != "" && answerC.value != "" && answerD.value != "") {
                    Questions = new Object();
                    Questions.title = title.value;
                    Questions.right_answer = answerA.value;
                    Questions.all_answer = [answerA.value, answerB.value, answerC.value, answerD.value];

                    // Empty Inputs
                    title.value = "";
                    answerA.value = "";
                    answerB.value = "";
                    answerC.value = "";
                    answerD.value = "";
                }
                // Show Area
                true_area.classList.add("off");
                mulit.classList.remove("off");

                break;
            case "trueF":
                if (titleTf.value != "" && answerTfA.value != "" && answerTfB.value != "") {
                    Questions = new Object();
                    Questions.title = titleTf.value;
                    Questions.right_answer = answerTfA.value;
                    Questions.all_answer = [answerTfA.value, answerTfB.value];

                    // Empty Inputs
                    titleTf.value = "";
                    answerTfA.value = "";
                    answerTfB.value = "";
                }
                // Show Area
                true_area.classList.remove("off");
                mulit.classList.add("off");

                break;
            default:
                break;
        }
    }
}

// Add New Question
function creatNewQuestion() {
    typeQuestion();
    // Start Shuffle
    shuffle(Questions.all_answer);
    // Vars
    allQuestions = JSON.parse(localStorage.getItem("allQuestions")) ? JSON.parse(localStorage.getItem("allQuestions")) : [];

    if (Questions != null) {
        // Set New Data
        let addQuestion = allQuestions ? [...allQuestions, Questions] : allQuestions;
        localStorage.setItem("allQuestions", JSON.stringify(addQuestion));
        allQuestions.push(Questions);

        // Insert All Questions In A Page
        showQuestions(addQuestion);
    }
}

// Show Questions In Page
(showQuestions = function (question) {
    if (question != null) {
        // Loop In question & Out Single Product
        let questionUi = question
            .map((item, index) => {
                // Get All Answer In A Page
                let box_answer = item.all_answer
                    .map((answer, i) => {
                        return `
            <div class="box_answer">
                <label class="label_answer" for="${index}${i}">${answer}</label>
                <input class="input_answer" type="radio" name="${index}" id="${index}${i}">
                </div>`;
                    })
                    .join(" ");

                // Set All Answer In List
                return `
            <li class="answer_area">
            <h3>${item.title}</h3>
            ${box_answer}
            <i class="fa fa-times removeQusetion" aria-hidden="true" onclick="removeQuestion(${index})"></i>
        </li>
        `;
            })
            .join(" ");
        // Insert All question In Page
        containerQuestions.innerHTML = questionUi;
    } else {
        containerQuestions.innerHTML = `<h3>لا توجد اسئلة</h3>`;
    }
})(allQuestions);

// Shuffle Answer
function shuffle(a) {
    for (let i = a.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [a[i], a[j]] = [a[j], a[i]];
    }
    return a;
}

// Delet Question
function removeQuestion(index) {
    allQuestions.splice(index, 1);
    localStorage.setItem("allQuestions", JSON.stringify(allQuestions));
    showQuestions(allQuestions);
    if (allQuestions.length == 0) {
        containerQuestions.innerHTML = `<h3>لا توجد اسئلة</h3>`;
        localStorage.removeItem("allQuestions");
    }
}
