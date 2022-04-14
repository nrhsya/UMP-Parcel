function validateFormInsert()
{
    var x = document.forms["form1"]["goodsListID"].value;

    if (x == " ") 
    {
        alert ("Goods List ID must be filled");
        return false;
    }
}
