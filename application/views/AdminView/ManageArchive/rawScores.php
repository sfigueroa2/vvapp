<!DOCTYPE>
<html>
    <head>
    </head>
    <script>
    function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}
function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }
    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
</script>
<button onclick="exportTableToCSV('RawScores.csv')">Export Raw Scores</button>
    <table>
    <tr>
        <th>ScoresID</th>
        <th>JudgeID</th>
        <th>PosterID</th>
        <th>Criteria1</th>
        <th>Criteria2</th>
        <th>Criteria3</th>
        <th>Criteria4</th>
        <th>Criteria5</th>
        <th>Criteria6</th>
        <th>Criteria7</th>
        <th>Criteria8</th>
        <th>Criteria9</th>
        <th>Criteria10</th>
        <th>Criteria11</th>
        <th>Criteria12</th>
        <th>Criteria13</th>
        <th>Comments</th>
    </tr>
    <?php foreach($rawscores as $rs){?>
        <tr>
        <td><?php echo $rs->ScoresID;?></td>
         <td><?php echo $rs->JudgeID;?></td>
         <td><?php echo $rs->PosterID;?></td>
         <td><?php echo $rs->Criteria1;?></td>
         <td><?php echo $rs->Criteria2;?></td>
         <td><?php echo $rs->Criteria3;?></td>
         <td><?php echo $rs->Criteria4;?></td>
         <td><?php echo $rs->Criteria5;?></td>
         <td><?php echo $rs->Criteria6;?></td>
         <td><?php echo $rs->Criteria7;?></td>
        <td><?php echo $rs->Criteria8;?></td>
        <td><?php echo $rs->Criteria9;?></td>
        <td><?php echo $rs->Criteria10;?></td>
        <td><?php echo $rs->Criteria11;?></td>
        <td><?php echo $rs->Criteria12;?></td>
        <td><?php echo $rs->Criteria13;?></td>
        <td><?php echo $rs->Comments;?></td>
        </tr>
     <?php }?>
    </table>
    </body>
    <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageArchive'">Back</button></p>

</html>