<!-- https://www.youtube.com/watch?v=CMwzLURK-rQ -->
<!DOCTYPE html>
<html lang="en">

<div class="row">
    <div class="col">
        <h3>Bagian</h3>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Bagian</th>
                </tr>
            </thead>
            <tbody>
                <tr class="align-middle">
                    <th scope="row">1</th>
                    <td>HRD</td>
                </tr>
                <tr class="align-middle">
                    <th scope="align-middle">2</th>
                    <TD>Finance</TD>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
</script>
</body>

</html>