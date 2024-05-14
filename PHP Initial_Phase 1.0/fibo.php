function fibo($term){
$term1=0;
$term2=1;
echo $term1 , $term2;
$lastTerm = $term1 + $term2;
for($i = 2; i < $term; i++){
    echo ","$lastTerm";
    $term1 =$term2;
    $term2 =$lastTerm;
    $lastTerm = $term1 + $term2;
    }
}


$totalterm = 23;
echo "fibo($totalterm)";