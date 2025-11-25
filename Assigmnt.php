//أهم دوال المصفوفات (Array Functions)

<?php
//1-array() / []

	//تُستخدم لإنشاء مصفوفة جديدة.	
    $colors = ["Red", "Green"];
    ?>

 <?php
//2- count()  

//تحسب عدد العناصر في مصفوفة

$items = ["a", "b", "c"];
echo count($items);
?>

<?php
//3-array_push()	

//تضيف عنصرًا أو أكثر إلى نهاية المصفوفة.
$stack = ["A"];
array_push($stack, "B", "C");
?>

<?php
//4-array_pop()
	تحذف آخر عنصر من المصفوفة.
    	$last = array_pop($stack);
        $stack = ["A", "B", "C"];
?>
 
 <?php
 //5-array_shift()	
 //زيل العنصر الأول من المصفوفة.	
 $queue = ["One", "Two"];
$first = array_shift($queue); 
?>

<?php
//6-array_unshift()
	//تضيف عنصرًا أو أكثر إلى بداية المصفوفة.
    	$queue = ["Two"];
array_unshift($queue, "One");
?>

<?php
//7-array_merge()	
// تدمج مصفوفتين أو أكثر في مصفوفة واحدة.	
 $arr1 = [1, 2]; $arr2 = [3, 4];
$merged = array_merge($arr1, $arr2);
?>

<?php
//8-
// in_array()	
// تتحقق مما إذا كانت قيمة معينة موجودة في مصفوفة.	$os = ["Mac", "Linux"];
if (in_array("Linux", $os)) 
    ?>

<?php
//9-sort
    	//ترتب عناصر المصفوفة تصاعديًا.
        	$nums = [4, 1, 8];
            sort($nums);
            ?>

 <?php
//10-array_slice()	
//تستخرج جزءًا من المصفوفة.
	$letters = ["a", "b", "c", "d"];
$slice = array_slice($letters, 1, 2);
?>


<?php
//11-array_reverse()
// 	تعكس ترتيب عناصر المصفوفة.	
$letters = ["a", "b", "c"];
$reversed = array_reverse($letters);
?>

<?php
//12-array_keys()	
// تُرجع جميع مفاتيح المصفوفة.	
$user = ["name" => "Ali"];
$keys = array_keys($user); 
?>

<?php
//13-array_values()	
// تُرجع جميع قيم المصفوفة.	
$user = ["name" => "Ali"];
$values = array_values($user); 



//أهم دوال النصوص (String Functions)

<?php
//1-strlen()
//تُرجع طول السلسلة النصية (عدد البايتات).
echo strlen("Hello");
?>

<?php
//2-str_replace()
// 	تستبدل نصًا معينًا بنص آخر داخل سلسلة.	
 echo str_replace("World", "PHP", "Hello World");
 ?>

 <?php
//3-strtoupper()
// 	تحول جميع الأحرف إلى أحرف كبيرة.	
echo strtoupper("text"); 
?>

<?php
//4-strtolower()
	//تحول جميع الأحرف إلى أحرف صغيرة.	
    echo strtolower("TEXT"); 
    ?>

    <?php
//5-trim()	
// تزيل المسافات البيضاء من بداية ونهاية السلسلة.	
echo trim("  Hi  "); 
?>

<?php
//6-substr()
// 	تُرجع جزءًا من السلسلة النصية.	
echo substr("abcdef", 1, 3); 
?>

<?php
//7-explode()	
// تقسم سلسلة نصية إلى مصفوفة بناءً على فاصل.	
$arr = explode(",", "a,b,c");
?>

<?php
//8-implode()
// 	تجمع عناصر مصفوفة في سلسلة نصية واحدة.
 	$str = implode("-", ["a", "b"]);
    ?>

<?php
//9-strpos()	
// تبحث عن أول ظهور لسلسلة فرعية وتعيد موقعها.
	$pos = strpos("abc", "b"); 
    ?>

    <?php
//10-str_word_count()
//	تحسب عدد الكلمات في سلسلة نصية.	
echo str_word_count("Hello World"); 
?>

<?php
//11-strrev()
//	تعكس ترتيب الأحرف في سلسلة نصية.
	echo strrev("abc");
    ?>