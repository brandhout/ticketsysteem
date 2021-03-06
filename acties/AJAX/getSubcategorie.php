<?php

/* 
 * Copyright (C) 2017 rhuijzer
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once '../../functies.php';
$connectie = verbinddatabase();

$searchq = filter_var($_REQUEST['cat'], FILTER_SANITIZE_NUMBER_INT);
$query = "SELECT * FROM subCategorie WHERE categorieId = '$searchq'";

if(!$uitkomst = $connectie->query($query)){
    echo "query mislukt..." . mysqli_error($connectie);
    }

echo "<select class='form' name='subCategorie'>
<option value = ''>---sub-categorie---</option>";

while($s = $uitkomst->fetch_assoc()){
    echo "<option value='" . $s['subCategorieId'] . "'>" . $s['subCatomschrijving'] . "</option>";
}

echo "</select>";