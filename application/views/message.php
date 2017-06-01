<?PHP
//echo $msg;
//echo $msg2;
?>

<form method="post" action ="<?PHP echo base_url();?>Datamgmt/searchuser" /> 
    User:<input type="text" name="username" />
    <input type="submit" value="Search"/>
<table border="1">
    <tr>
    <td> Name</td>
    </tr>
    <?PHP
        foreach($datas->result() as $mydata){
    ?>
<tr>
    <td> <?PHP echo $mydata->username;?></td>
</tr>
<?PHP
}
?>
</table>