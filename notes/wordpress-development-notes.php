<?php include ("../header.php"); ?>

<main>
    <h1>WordPress Development Notes</h1>
    <div class="note">
        <p class="note-title">When to and not to 'echo' ?</p>
        <p class="note-content">Functions that start with 'get' only return values. Use 'echo' to output those values to the front-end. Functions that start with 'the' outputs values, meaning they 'echo' the values, so no need to use echo for these functions.</p>
    </div>
</main>

<?php include ("../footer.php"); ?>