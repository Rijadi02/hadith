<?php 

require_once "../includes/init_head.php";

if(isset($_POST['submit']))
{
    $email = new Emails();
    $email->hadith = $_POST['number'];
    $email->date = $_POST['date'];
    $email->save();
}

if(isset($_GET['mode']) && $_GET['mode'] == 'delete')
{
    $email = Emails::find_by_id($_GET['id']);
    $email->delete($email->id);
    redirect("add");
}

$emails = Emails::find_all();


?>



<form action="" method="POST">
    <label>Hadith ID</label>
    <br>
    <input required type="text" name="number">
    <br>
    <label>Date</label>
    <br>
    <input required type="date" name="date"></input>
    <br>
    <br>
    <input type="submit" name="submit">
</form>

<table class=" table-bordered">
    
    <tbody>
    <tr>
            <td style="padding: 10px;">
                ID
            </td>
            <td style="padding: 10px;">
                Hadith
            </td>
           
            <td style="padding: 10px 50px;">
                Date
            </td>
            <td style="padding: 10px;">
                Delete
            </td>
        </tr>
        <?php foreach($emails as $email) : ?>
        <tr>
            <td class="px-2">
                <?php echo $email->id ?>
            </td>
            <td>
                <?php echo $email->hadith ?>
            </td>
    
            <td>
                <?php echo $email->date ?>
            </td>
            <td>
               <a href="?mode=delete&id=<?php echo $email->id ?>"> Delete </a> 
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

