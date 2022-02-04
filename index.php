<?php
/*
* Generate displays for books purchased in last 30 days
*/
require_once "./res/conn.php";
$results=array();
$sql="SELECT * FROM NewBib WHERE ISBN<>'' ORDER BY CallNo";
$stmt=$db->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Penrose Library: Recently Acquired Books</title>
<style>
  #text-book-jacket>img{
  width:10rem;
  height:auto;
  }
</style>
</head>
<body>
    <div class="container">
    <div class="row">
<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $isbn = explode(";", $row['ISBN']);
        $result_temp = array('title'=>$row['Title'], 'isbn'=>$isbn[0], 'author'=>$row['Author'], 'callno'=>$row['CallNo'], 'id'=>$row['MMSid'], 'location'=>$row['LocationName'] );
        echo '<div class="col-3">
                <div class="card medium">
                    <div id="text-book-jacket">
                      <img src="https://images.btol.com/ContentCafe/Jacket.aspx?UserID=&Password=&Return=T&Type=M&Value=' . $isbn[0] . '" alt="image for book cover" /></div><div class="jacket-title"><a href="http://sherlock.whitman.edu/primo_library/libweb/action/dlSearch.do?institution=WHITC&vid=WHITC&tab=default_tab&mode=Basic&group=GUEST&onCampus=true&displayMode=full&displayField=all&search_scope=whitc_alma&query=any,contains,' . $row['MMSid'] . '">' . $row['Title'] . $row['Author'] . '</a>
                    </div>
                </div>
              </div>';
}
?>
  </div>
</div>
</body>
</html>
