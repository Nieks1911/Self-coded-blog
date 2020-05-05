<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieks Blog - BB update</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div>
    <form class="bb_form" action="../database/bb_update_db.php" method="POST">
        <h1 class="page_title">Update Building Block Status</h1>

        <!-- Pitch perfect -->
        <h4 class="bb_name" id="bb_pp">Pitch Perfect</h4>
        <select id="bb_pp" name="bb_pp">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- Being-a-boss -->
        <h4 class="bb_name" id="bb_bab">Being-a-Boss</h4>
        <select id="bb_bab" name="bb_bab">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- Content -->
        <h4 class="bb_name" id="bb_cnt">Content</h4>
        <select id="bb_cnt" name="bb_cnt">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- Doelgroep -->
        <h4 class="bb_name" id="bb_dg">Doelgroep</h4>
        <select id="bb_dg" name="bb_dg">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- Concepten -->
        <h4 class="bb_name" id="bb_cnc">Concepten</h4>
        <select id="bb_cnc" name="bb_cnc">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- Interactie Ontwerpen -->
        <h4 class="bb_name" id="bb_io">Interactie Ontwerpen</h4>
        <select id="bb_io" name="bb_io">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- Oplever -->
        <h4 class="bb_name" id="bb_ol">Oplever</h4>
        <select id="bb_ol" name="bb_ol">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- Back-end -->
        <h4 class="bb_name" id="bb_be">Back-end</h4>
        <select id="bb_be" name="bb_be">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- Front-end -->
        <h4 class="bb_name" id="bb_fe">Front-end</h4>
        <select id="bb_fe" name="bb_fe">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- Iron man -->
        <h4 class="bb_name" id="bb_im">Iron man</h4>
        <select id="bb_im" name="bb_im">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- One of a Kind -->
        <h4 class="bb_name" id="bb_ok">One of a Kind</h4>
        <select id="bb_ok" name="bb_ok">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <!-- Sector verdieping -->
        <h4 class="bb_name" id="bb_sv">Sector verdieping</h4>
        <select id="bb_sv" name="bb_sv">
            <option value="No">Not done</option>
            <option value="Yes">Done</option>
        </select>
        <br>
        <button class="submit_btn" name="update_bb_submit" type="submit">Update BB status</button>
    </form>
</div>
</body>
</html>