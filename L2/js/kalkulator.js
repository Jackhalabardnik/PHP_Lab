function oblicz()
{
    var X = parseFloat(document.getElementById('X').value);
    var Y = parseFloat(document.getElementById('Y').value);
    const radio_buttons = document.getElementsByName("choice");
    let choice;
    for (const button of radio_buttons) {
        if (button.checked) {
            choice = parseInt(button.value);
            break;
        }
    }

    switch(choice)
    {
        case 1:
            result = X + Y;
            break;
        case 2:
            result = X - Y;
            break;
        case 3:
            result = X * Y;
            break;
        case 4:
            result = X / Y;
            break;
    }

    if(isNaN(result) || !isFinite(result))
    {
        result = "Nieprawidłowe dane";
    }

    var sum = document.getElementById('sum');
    sum.value = result;
}