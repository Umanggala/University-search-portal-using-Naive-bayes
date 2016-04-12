<?php 
function remove_stop_words($sentence)
{
	$stopwords = array("A", "ABOUT", "ABOVE", "ABOVE", "ACROSS", "AFTER", "AFTERWARDS", "AGAIN", "AGAINST", "ALL", "ALMOST", "ALONE", "ALONG", "ALREADY", "ALSO","ALTHOUGH","ALWAYS","AM","AMONG", "AMONGST", "AMOUNGST", "AMOUNT",  "AN", "AND", "ANOTHER", "ANY","ANYHOW","ANYONE","ANYTHING","ANYWAY", "ANYWHERE", "ARE", "AROUND", "AS",  "AT", "BACK","BE","BECAME", "BECAUSE","BECOME","BECOMES", "BECOMING", "BEEN", "BEFORE", "BEFOREHAND", "BEHIND", "BEING", "BELOW", "BESIDE", "BESIDES", "BETWEEN", "BEYOND", "BILL", "BOTH", "BOTTOM","BUT", "BY", "CALL", "CAN", "CANNOT", "CANT", "CO", "CON", "COULD", "COULDNT", "CRY", "DE", "DESCRIBE", "DETAIL", "DO", "DONE", "DOWN", "DUE", "DURING", "EACH", "EG", "EIGHT", "EITHER", "ELEVEN","ELSE", "ELSEWHERE", "EMPTY", "ENOUGH", "ETC", "EVEN", "EVER", "EVERY", "EVERYONE", "EVERYTHING", "EVERYWHERE", "EXCEPT", "FEW", "FIFTEEN", "FIFY", "FILL", "FIND", "FIRE", "FIRST", "FIVE", "FOR", "FORMER", "FORMERLY", "FORTY", "FOUND", "FOUR", "FROM", "FRONT", "FULL", "FURTHER", "GET", "GIVE", "GO", "HAD", "HAS", "HASNT", "HAVE", "HE", "HENCE", "HER", "HERE", "HEREAFTER", "HEREBY", "HEREIN", "HEREUPON", "HERS", "HERSELF", "HIM", "HIMSELF", "HIS", "HOW", "HOWEVER", "HUNDRED", "IE", "IF", "IN", "INC", "INDEED", "INTEREST", "INTO", "IS", "IT", "ITS", "ITSELF", "KEEP", "LAST", "LATTER", "LATTERLY", "LEAST", "LESS", "LTD", "MADE", "MANY", "MAY", "ME", "MEANWHILE", "MIGHT", "MILL", "MINE", "MORE", "MOREOVER", "MOST", "MOSTLY", "MOVE", "MUCH", "MUST", "MY", "MYSELF", "NAME", "NAMELY", "NEITHER", "NEVER", "NEVERTHELESS", "NEXT", "NINE", "NO", "NOBODY", "NONE", "NOONE", "NOR", "NOT", "NOTHING", "NOW", "NOWHERE", "OF", "OFF", "OFTEN", "ON", "ONCE", "ONE", "ONLY", "ONTO", "OR", "OTHER", "OTHERS", "OTHERWISE", "OUR", "OURS", "OURSELVES", "OUT", "OVER", "OWN","PART", "PER", "PERHAPS", "PLEASE", "PUT", "RATHER", "RE", "SAME", "SEE", "SEEM", "SEEMED", "SEEMING", "SEEMS", "SERIOUS", "SEVERAL", "SHE", "SHOULD", "SHOW", "SIDE", "SINCE", "SINCERE", "SIX", "SIXTY", "SO", "SOME", "SOMEHOW", "SOMEONE", "SOMETHING", "SOMETIME", "SOMETIMES", "SOMEWHERE", "STILL", "SUCH", "SYSTEM", "TAKE", "TEN", "THAN", "THAT", "THE", "THEIR", "THEM", "THEMSELVES", "THEN", "THENCE", "THERE", "THEREAFTER", "THEREBY", "THEREFORE", "THEREIN", "THEREUPON", "THESE", "THEY", "THICKV", "THIN", "THIRD", "THIS", "THOSE", "THOUGH", "THREE", "THROUGH", "THROUGHOUT", "THRU", "THUS", "TO", "TOGETHER", "TOO", "TOP", "TOWARD", "TOWARDS", "TWELVE", "TWENTY", "TWO", "UN", "UNDER", "UNTIL", "UP", "UPON", "US", "VERY", "VIA", "WAS", "WE", "WELL", "WERE", "WHAT", "WHATEVER", "WHEN", "WHENCE", "WHENEVER", "WHERE", "WHEREAFTER", "WHEREAS", "WHEREBY", "WHEREIN", "WHEREUPON", "WHEREVER", "WHETHER", "WHICH", "WHILE", "WHITHER", "WHO", "WHOEVER", "WHOLE", "WHOM", "WHOSE", "WHY", "WILL", "WITH", "WITHIN", "WITHOUT", "WOULD", "YET", "YOU", "YOUR", "YOURS", "YOURSELF", "YOURSELVES", "THE",
	"DEPARTMENT", "&amp;");



	//$sentence="Hello, How do you do ? I am pursuing computer engineering from dj sanghvi college of engineering. ";
	$new_sentence=$sentence;
	foreach($stopwords as $word)
	{
	
		$to_find=" ".$word." ";
		if (strpos($sentence,$to_find)!==false) 
		{
			
			$new_sentence=str_replace($to_find," ",$new_sentence);
		}
		
		$to_find=" ".$word.".";
		if (strpos($sentence,$to_find)!==false) 
		{
			
			$new_sentence=str_replace($to_find,".",$new_sentence);
		}	
	}
	
	
	return $new_sentence;
}
?>