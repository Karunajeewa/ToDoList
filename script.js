function todoList(){
    var iteam = document.getElementById("todoInput").value
    var text = document.createTextNode(iteam)
    var newItem = document.createElement("li")
    newItem.appendChild(text)
    document.getElementById("todoList").appendChild(newItem)

}