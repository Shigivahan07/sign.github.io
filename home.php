<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5f59ca6ad3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap");
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css");

.todos-bg-container {
    background-color: black;
    height: 100;
}

.bio-section {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

body {
    background-color: #101820;
    height: 100%;
}

.todos-heading {
    text-align: center;
    font-family: "Playfair Display";
    font-size: 46px;
    font-weight: 700;
    margin-top: 40px;
    margin-bottom: 40px;
    color: #FEE715;
}

.para {
    text-align: center;
    font-family: "Playfair Display";
    font-size: 30px;
    font-weight: 200;
    margin-top: 40px;
    margin-bottom: 40px;
    color: #FEE715;
}

.copyright {
    font-family: "Playfair Display";
    font-size: 15px;

    margin-top: 40px;
    margin-bottom: 40px;
    color: #FEE715;
}

.centered-text {
    text-align: center;
}

.between-text {
    margin-bottom: 10px;
}

body {
    position: relative;
    min-height: 100vh;
    margin: 0;
    padding: 0;
}

#scrollToTopButton {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    color: #101820;
    background-color: #FEE715;
    border: none;
    border-radius: 20px;
    padding: 10px 20px;
    cursor: pointer;
}

#scrollToTopButton:hover {
    background-color: #F4C500;
}

.create-task-heading {
    font-family: "Playfair Display";
    font-size: 32px;
    font-weight: 500;
    color: #FEE715;
    margin-bottom: 20px;
}

.icon {
    margin-left: 10px;
}

.todo-items-heading {
    font-family: "Playfair Display";
    font-size: 32px;
    color: #FEE715;
    font-weight: 400;
}

.about {
    font-family: "Playfair Display";
    font-size: 25px;
    color: #FEE715;
    font-weight: 200;
}

.text {
    flex: 1;
}

.todo-items-heading-subpart {
    font-family: "Roboto";
    font-size: 32px;
    font-weight: 500;
}

.todo-items-container {
    margin: 0px;
    padding: 0px;
}

.todo-item-container {
    margin-top: 15px;
}

.todo-user-input {
    background-color: black;
    width: 100%;
    border-style: solid;
    border-width: 1px;
    border-color: #FEE715;
    border-radius: 10px;
    margin-top: 10px;
    padding: 15px;
    color: #FEE715;
    font-family: "Playfair Display";
}

.footer-contact {
    font-family: "Playfair Display";
    font-size: 25px;
    color: #FEE715;
}

.name {
    font-family: "Playfair Display";
    font-size: 15px;
    color: #FEE715;
}

.button {
    color: #101820;
    background-color: #FEE715;
    font-family: "Playfair Display";
    font-size: 18px;
    border-width: 0;
    border-radius: 20px;
    margin-top: 20px;
    margin-bottom: 50px;
    padding-top: 5px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 5px;
    font-weight: bold;
}

.btn-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.label-container {
    background-color: black;
    width: 70%;
    border-style: solid;
    border-width: 5px;
    border-color: #FEE715;
    border-right: none;
    border-top: none;
    border-bottom: none;
    border-radius: 4px;
}

.checkbox-input {
    width: 20px;
    height: 20px;
    margin-top: 12px;
    margin-right: 12px;
    color: #FEE715;
}

.checkbox-label {
    font-family: "Playfair Display";
    font-size: 16px;
    font-weight: 400;
    width: 82%;
    margin: 0px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 5px;
    color: #FEE715;
}

.delete-icon-container {
    text-align: right;
    width: 18%;
}

.delete-icon {
    padding: 15px;
    color: #FEE715;
}

.checked {
    text-decoration: line-through;
}

.social-links a {
    font-size: 18px;
    display: inline-block;
    background: #FEE715;
    color: #101820;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
}

#footer {
    background: black;
    padding: 0 0 30px 0;
    color: #212529;
    font-size: 14px;
}

/* Style the checkbox */
#checkbox {
    display: inline-block;
    cursor: pointer;
    opacity: 1;
}

#label i {
    display: none;
}
#checkbox:checked+#label i {
    display: inline;
    color: #00ff00;
}

#checkbox:checked {
    display: none;
}

.back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 99999;
    background: #eb5d1e;
    width: 40px;
    height: 40px;
    border-radius: 4px;
    transition: all 0.4s;
}
input[type=submit] {
    width: 100px;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 10px;
    background-color: #FFD700;
    border-radius: 50px;
    border: none;
}

.logout-button {
    
}

    </style>
</head>
<body>
    <div class="todos-bg-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="todos-heading">THE <br>AGENDA PAVILLION</h1>
                    <p class="para">Where meticulous planning meets refined elegance, curating your moments with precision and grace</p>
                    <h1 class="create-task-heading">
                        THE TASKMASTER'S DOMAIN <i class="bi bi-arrow-bar-down"></i>
                    </h1>
                    <input type="text" id="todoUserInput" class="todo-user-input" placeholder="What duties await your action?" />
                    <div class="btn-container">
                        <button class="button" id="addTodoButton"><i class="bi bi-plus add-icon"></i></button>
                    </div>
                    <h1 class="todo-items-heading"><span class="text">MY PURSUITS</span><i class="bi bi-arrow-bar-down icon"></i></h1>
                    <ul class="todo-items-container" id="todoItemsContainer"></ul>
                    <div class="btn-container">
                        <button class="button" id="saveTodoButton"><i class="bi bi-floppy"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <button id="scrollToTopButton" onclick="scrollToTop()"><i class="bi bi-arrow-up-short"></i></button>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h1 class="footer-contact">A WEBSITE BY</h1>
                        <p class="name mt-3">SHIGIVAHAN A</p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <div class="social-links mt-2">
                            <a href="www.twitter.com/Shigivahan_A"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" class="ml-1"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Nxtwave</span></strong>. All Rights Reserved
            </div>
        </div>
        <form class="btn-container" action="logout.php" method="POST" class="logout-form">
        <input type="submit" value="Logout">
    </form>
    </div>
    
</body>
<script>
    let todoItemsContainer = document.getElementById("todoItemsContainer");
let addTodoButton = document.getElementById("addTodoButton");
let saveTodoButton = document.getElementById("saveTodoButton");

function getTodoListFromLocalStorage() {
    let stringifiedTodoList = localStorage.getItem("todoList");
    let parsedTodoList = JSON.parse(stringifiedTodoList);
    if (parsedTodoList === null) {
        return [];
    } else {
        return parsedTodoList;
    }
}

let todoList = getTodoListFromLocalStorage();
let todosCount = todoList.length;

saveTodoButton.onclick = function() {
    localStorage.setItem("todoList", JSON.stringify(todoList));
};

function onAddTodo() {
    let userInputElement = document.getElementById("todoUserInput");
    let userInputValue = userInputElement.value;

    if (userInputValue === "") {
        alert("Enter Valid Text");
        return;
    }

    todosCount = todosCount + 1;

    let newTodo = {
        text: userInputValue,
        uniqueNo: todosCount,
        isChecked: false
    };
    todoList.push(newTodo);
    createAndAppendTodo(newTodo);
    userInputElement.value = "";
}

addTodoButton.onclick = function() {
    onAddTodo();
};

function onTodoStatusChange(checkboxId, labelId, todoId) {
    let checkboxElement = document.getElementById(checkboxId);
    let labelElement = document.getElementById(labelId);
    labelElement.classList.toggle("checked");

    let todoObjectIndex = todoList.findIndex(function(eachTodo) {
        let eachTodoId = "todo" + eachTodo.uniqueNo;

        if (eachTodoId === todoId) {
            return true;
        } else {
            return false;
        }
    });

    let todoObject = todoList[todoObjectIndex];

    if (todoObject.isChecked === true) {
        todoObject.isChecked = false;
    } else {
        todoObject.isChecked = true;
    }

}

function onDeleteTodo(todoId) {
    let todoElement = document.getElementById(todoId);
    todoItemsContainer.removeChild(todoElement);

    let deleteElementIndex = todoList.findIndex(function(eachTodo) {
        let eachTodoId = "todo" + eachTodo.uniqueNo;
        if (eachTodoId === todoId) {
            return true;
        } else {
            return false;
        }
    });

    todoList.splice(deleteElementIndex, 1);
}

function createAndAppendTodo(todo) {
    let todoId = "todo" + todo.uniqueNo;
    let checkboxId = "checkbox" + todo.uniqueNo;
    let labelId = "label" + todo.uniqueNo;

    let todoElement = document.createElement("li");
    todoElement.classList.add("todo-item-container", "d-flex", "flex-row");
    todoElement.id = todoId;
    todoItemsContainer.appendChild(todoElement);

    let inputElement = document.createElement("input");
    inputElement.type = "checkbox";
    inputElement.id = checkboxId;
    inputElement.checked = todo.isChecked;

    inputElement.onclick = function() {
        onTodoStatusChange(checkboxId, labelId, todoId);
    };

    inputElement.classList.add("checkbox-input");
    todoElement.appendChild(inputElement);

    let labelContainer = document.createElement("div");
    labelContainer.classList.add("label-container", "d-flex", "flex-row");
    todoElement.appendChild(labelContainer);

    let labelElement = document.createElement("label");
    labelElement.setAttribute("for", checkboxId);
    labelElement.id = labelId;
    labelElement.classList.add("checkbox-label");
    labelElement.textContent = todo.text;
    if (todo.isChecked === true) {
        labelElement.classList.add("checked");
    }
    labelContainer.appendChild(labelElement);

    let deleteIconContainer = document.createElement("div");
    deleteIconContainer.classList.add("delete-icon-container");
    labelContainer.appendChild(deleteIconContainer);

    let deleteIcon = document.createElement("i");
    deleteIcon.classList.add("far", "fa-trash-alt", "delete-icon");

    deleteIcon.onclick = function() {
        onDeleteTodo(todoId);
    };

    deleteIconContainer.appendChild(deleteIcon);
}
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

window.onscroll = function() {
    const scrollToTopButton = document.getElementById("scrollToTopButton");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
}

for (let todo of todoList) {
    createAndAppendTodo(todo);
}
</script>

</html>