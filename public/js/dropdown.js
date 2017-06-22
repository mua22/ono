var count = 1;

function fun() {


        var text = document.getElementById('dropval').value;

        if(text == '')
        {
            document.getElementById('fun').innerHTML = 'please enter a value first!!!';
        }
        else
        {
            var option = document.createElement("option");
        option.text = text;
        option.id ='opt'+ count ;
        var select = document.getElementById("sel");
        select.appendChild(option);

        document.getElementById('fun').innerHTML = 'option#'+count+'added in the dropdown';
        document.getElementById('dropval').value = '';
        count++;
        }
}

function fun1() {
     var selectBox = document.getElementById("sel");

    for (var i = 0; i < selectBox.options.length; i++)
    {
        selectBox.options[i].selected = true;
    }
}