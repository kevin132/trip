function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
//List of selection in the input with ajax
$(document).ready(function (e) {
    $("#start_trip").keyup(function () {
        $("#show_up").show();
        var text = $(this).val();
        $.ajax({
            type: 'GET',
            url: 'search.php',
            data: 'txt=' + text,
            success: function (data) {
                $("#show_up").html(data);
            }
        });
    })
});
//Insert value of today date in the input
let day = new Date();
let today = day.toISOString().substr(0, 10);
document.querySelector("#reservation_start").value = today;
let tomorrow = day.setDate(day.getDate()+2);
tomorrow = new Date(tomorrow).toISOString().substr(0, 10);
document.querySelector("#reservation_back").value = tomorrow;


let buttonDefault = document.querySelector('button');
buttonDefault.addEventListener("click", function (e) {
    e.preventDefault();

})

