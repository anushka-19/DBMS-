<?php>

extract($_POST);

if(isset($add))
{
    $grosspay = $innercity + $basicsalary + $overtime;

    $taxablepay = ($grosspay * 9)/ 100;
    $pensionablepay = ($grosspay * 5.5)/ 100;
    $studentloan = ($grosspay * 2.5)/ 100;
    $nipayment = ($grosspay * 2.3)/ 100;

    $deduction = $taxablepay + $pensionablepay + $studentloan + $nipayment;
    
    $netpay =  $grosspay - $deduction;

    $innercity = $innercity;
    $basicsalary = $basicsalary;
    $overtime = $overtime;

    $referenceno = rand(1200, 10000000);
    $employer = "Anushka Priya & Nikkita Batra";
    $empaddress = "2, Rose Street, Delhi";
    $taxperiod = date('m');
    $pension = $taxperiod * $pensionablepay;
    $tax = $taxperiod * $taxablepay;
    $paydate = date('d/m/y');
    $studentref = $studentloan * $taxperiod;




}
?>

<HTML>
<HEAD>
<TITLE>Payroll Management System </TITLE>
<style type="text.css">
.style1 {
    border-width: 0;
    border: solid gray 0px;
    width: 90%;
    border-radius: 5px;
    margin: 5px auto;
    background: white;
}

.style2 {
    border-width: 0;
    border: solid gray 10px;
    width: 50%;
    border-radius: 5px;
    margin: 5px auto;
    background: silver;
    align: left;
    font-size:20;

}
.tablefont
{
    font-size:16;
}
.btn {
    width: 302px;
    height: 50px;
    padding: 5px;
    background: gray;
    font-size:30px;
    color: white;
}
</style>
</HEAD>
<BODY bgcolor= "808080">
<center> <img src="something.png">
<B><font color="white" style="font-size:60" > Payroll Management Systems </font> </B>
</center>
<hr size=5 color = "white">
<div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
<table class="style1">
<tr>
<td>Employee Name:</td>
    <td><input type="text" name = "employee" style="width: 300px">
</td>
<td>Post Code:</td>
    <td><input type="text" name="postcode" style="width: 300px">
</td>
</tr>

<tr>
<td>Adress:</td>
    <td><input type="text" name = "address" style="width: 300px">
</td>
<td>Gender:</td>
    <td>
Male<input type="radio" value="m" name="g" value="<?php echo $m; ?>" onfocus="this.value=' '"/>
Female<input type="radio" value="f" name="g" value="<?php echo $g; ?>" onfocus="this.value=' '"/>
</td>
</tr></table>
<!--======comment======-->
<table class="style1">
    <tr><td>
        <table bgcolor="808080">
            <tr>
            <td>Reference No:</td>
                <td><input type="text" name = "referenceno" style="width: 400px" value ="<?php echo $referenceno ?>" onfocus ="this.value=' '">
            </td></tr>
            <tr><td>Employer:</td>
                <td><input type="text" name = "employer" style="width: 400px" value ="<?php echo $employer ?>" onfocus ="this.value=' '">
            </td></tr>

            <tr><td>Emp Address:</td>
                <td><input type="text" name = "empaddress" style="width: 400px" value ="<?php echo $empaddress ?>" onfocus ="this.value=' '">
            </td></tr>

</table></td>

<!--=====comment====-->
<td><table bgcolor="C0C0C0">
    <tr>

    <td> Tax Period: </td>
    <td><<input type="text" name = "taxperiod" style="width: 100px" value ="₹<?php echo $taxperiod ?>" onfocus ="this.value=' '">
</td>
</tr>

<tr><td>Tax Code:</td>
    <td><input type="text" name = "taxcode" style="width: 300px" required>
</td></tr>
<tr>
    <td>Pay Date:</td>
    <td><input type="text" name = "paydate" style="width: 400px" value ="₹<?php echo $paydate ?>" onfocus ="this.value=' '">
</tr>
</tr>

</table></td></tr>
</table>

<!--=====comment====-->
<table class="style1">
    <tr>
        <td>Inner City Weighting:</td>
        <td><input type="text" name = "innercity" style="width: 200px" value ="<?php echo $innercity ?>" onfocus ="this.value=' '">
    </td>
        <td>Tax ToDate:</td>
        <td><input type="text" name = "tax" style="width: 200px" value ="₹<?php echo $tax ?>" onfocus ="this.value=' '">
    </td>
    <td>Pension ToDate:</td>
        <td><input type="text" name = "pension" style="width: 200px" value ="₹<?php echo $pension ?>" onfocus ="this.value=' '">
    </td>
    <td>Basic Salary:</td>
        <td><input type="text" name = "basicsalary" style="width: 200px" value ="₹<?php echo $basicsalary ?>" onfocus ="this.value=' '">
    </td>
    <td>Student ToDate:</td>
        <td><input type="text" name = "studentref" style="width: 200px" value ="₹<?php echo $studentref ?>" onfocus ="this.value=' '">
    </td>

    <td>NI Code:</td>
        <td><input type="text" name = "nicode" style="width: 200px" value ="₹<?php echo $nicode ?>" onfocus ="this.value=' '">
    </td>
</tr>

<tr><td>Over Time:</td>
        <td><input type="text" name = "overtime" style="width: 200px" value ="₹<?php echo $overtime ?>" onfocus ="this.value=' '">
    </td>

    <td>Student Loan:</td>
        <td><input type="text" name = "studentLoan" style="width: 200px" value ="₹<?php echo $studentloan ?>" onfocus ="this.value=' '">
    </td>

<td>NI Number:</td>
        <td><input type="text" name = "ninumber" style="width: 200px" value ="₹<?php echo $ninumber ?>" onfocus ="this.value=' '">
    </td>
</tr>
</table>
<!--=====comment====-->
<table class="style1">
    <tr><td>
        <table bgcolor="808080">
            <tr>
            <td>NI Payment:</td>
        <td><input type="text" name = "nipayment" style="width: 380px" value ="₹<?php echo $nipayment ?>" onfocus ="this.value=' '">
    </td></tr>

            <tr>
            <td>Taxable Pay:</td>
        <td><input type="text" name = "taxablepay" style="width: 380px" value ="₹<?php echo $taxablepay ?>" onfocus ="this.value=' '">
    </td></tr>

    <tr>
            <td>Pensionableable Pay:</td>
        <td><input type="text" name = "pensionablepay" style="width: 380px" value ="₹<?php echo $pensionablepay ?>" onfocus ="this.value=' '">
    </td></tr>
</table></td>

<!--====comment====-->
<td><table bgcolor="C0COCO">
<tr>
            <td>Gross Pay:</td>
        <td><input type="text" name = "grosspay" style="width: 400px" value ="₹<?php echo $grosspay ?>" onfocus ="this.value=' '">
    </td></tr>

    <tr>
            <td>Deductions:</td>
        <td><input type="text" name = "deductions" style="width: 400px" value ="₹<?php echo $deduction ?>" onfocus ="this.value=' '">
    </td></tr>

    <tr>
            <td>Net Pay:</td>
        <td><input type="text" name = "netpay" style="width: 400px" value ="₹<?php echo $netpay ?>" onfocus ="this.value=' '">
    </td></tr>
</table></td></tr>
</table>

<!--=====comment=====-->
<table class="style1">
    <tr><td>
        <table bgcolor="808080">
        <tr>
            <td>Reference Note:</td>
        <td><textarea cols="73" row="5" >Net Pay: Rs.<?php echo $netpay ;?>
        This is based on Income Tax, National Insurance and Student Loan Information.
</textarea>   
    </td></tr>
</table></td>

<!--====comment====-->
<td><table bgcolor="C0C0C0">
    <tr>
        <td>&nbsp;</td><td align="left" style="width: 400px">
        <input type="submit" value="Submit" name="add" class="btn"></td>
</tr>
<tr>
    <td>&nbsp;</td><td align="left" style="width: 400px">
    <input type="reset" value="Reset" name="reset" class="btn" onclick="reset();"></td>
</tr>
</table></td></tr>
</table>

<!--====comment====-->
</table>

<div>
</form>
</BODY>
</HTML>
