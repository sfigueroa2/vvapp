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
<button onclick="exportTableToCSV('JudgeCount.csv')">Export Judge Count</button>
    <table>
    <tr>
    <th>JudgeID</th>
    <th>Judge Name</th>
    <th>Count</th>

    </tr>
    <?php foreach($judgetimes as $js){?>
        <tr>
        <td><?php echo $js->JudgeID;?></td>
        <td><?php echo $js->JudgeName;?></td>
        <td><?php echo $js->JFirst." ".$js->JLast;?></td>
        <td><?php echo $js->Times;?></td>
        </tr>
     <?php }?>
    </table>
    </body>
    <p><button onclick="location.href='<?php echo base_url();?>index.php/AdminController/ManageArchive'">Back</button></p>

</html>