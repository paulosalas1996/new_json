<?php
header("Access-Control-Allow-Origin: *");


$medicines = array(
    array(
        "id" => 1,
        "genericName" => "Paracetamol",
        "drugClass" => "Aminopenicillins",
        "strength" => "500 mg",
        "company" => "UNILAB, Inc",
        "description" => "Relief and care for headache and fever."
    ),
    array(
        "id" => 2,
        "genericName" => "Cetirizine",
        "drugClass" => "Antihistamines",
        "strength" => "10 mg",
        "company" => "Knoll Pharmaceuticals Ltd",
        "description" => "An antihistamine used to relieve allergy symptoms."
    ),
    array(
        "id" => 3,
        "genericName" => "Ambroxol",
        "drugClass" => "Mucolytic",
        "strength" => "5 ml",
        "company" => "Kala Amb Industrial Area",
        "description" => "Ambroxol is a strong expectorant, clinically proven active mucolytic agent."
    ),
    array(
        "id" => 4,
        "genericName" => "Neozep Forte",
        "drugClass" => "Analgesic-antipyretic",
        "strength" => "10 mg / 2 mg / 500 mg",
        "company" => "PT. Medifarma Laboratories",
        "description" => "For relief of cold and all its symptoms."
    ),
    array(
        "id" => 5,
        "genericName" => "Cephalexin",
        "drugClass" => "Cephalosporin antibiotics",
        "strength" => "500 mg",
        "company" => "PT. Medifarma Laboratories",
        "description" => "Used to treat a wide variety of bacterial infections."
    )
);

echo json_encode($medicines);
?>