function oblicz() 
{ 
    var amount = parseFloat(document.getElementById('amount').value);
    var count = parseFloat(document.getElementById('count').value);
    var percent = parseFloat(document.getElementById('percent').value);

    var percent_per_month = percent/1200.0;

    var upper_side = amount * percent_per_month;

    var down_side = 1 - 1 / Math.pow(1 + percent_per_month, count);

    var instalment = (upper_side/down_side).toFixed(2);

    var sum = (count * instalment).toFixed(2);

    var instalment_box=document.getElementById('instalment'); 
    var sum_box=document.getElementById('sum'); 

    if(isNaN(sum) || isNaN(instalment) || !isFinite(sum) || !isFinite(instalment))
    {
        instalment_box.value = "Nie można obliczyć - nieprawidłowe dane";
        sum_box.value = "Nie można obliczyć - nieprawidłowe dane";
    }
    else
    {
        instalment_box.value = instalment;
        sum_box.value = sum;
    }
}