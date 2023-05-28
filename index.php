<!DOCTYPE html>
<html>
    <body>
        <h1>
            BÀI 3
        </h1>
    </body>
<?php echo "Câu 1: ";
//Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function isEven($number) {
  if ($number % 2 == 0) {
    return true;
  } else {
    return false;
  }
}
$number = 10; 
if (isEven($number)) {
  echo "$number là số chẵn";
} else {
  echo "$number không là số chẵn";
}
?>
<br/>

<?php echo "Câu 2: ";
//Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function calculateSum($n) {
    $sum = 0; 
    for ($i = 1; $i <= $n; $i++) {
      $sum += $i;
    }
    return $sum;
  }
  $n = 10; 
  $sum = calculateSum($n);
  echo "Tổng của các số từ 1 đến $n là: $sum";
  ?>
  <br/>

  <?php echo "Câu 3: ";
//Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
for ($i = 1; $i <= 10; $i++) {
    echo "Bảng cửu chương $i:<br>";
    for ($j = 1; $j <= 10; $j++) {
      $result = $i * $j;
      echo "$i x $j = $result<br>";
    }
    echo "<br>";
  }
  ?>
  <br/>

  <?php echo "Câu 4: ";
//Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkWord($string, $word) {
    $string = strtolower($string); 
    $word = strtolower($word); 
  
    if (strpos($string, $word) !== false) {
      return true; 
    } else {
      return false; 
    }
  }
  $string = "Duong Thuy Linh";
  $wordToCheck = "linh";
  if (checkWord($string, $wordToCheck)) {
    echo "Chuỗi '$string' chứa từ '$wordToCheck'.";
  } else {
    echo "Chuỗi '$string' không chứa từ '$wordToCheck'.";
  }
  ?>
  <br/>

  <?php echo "Câu 5: ";
//Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMaxMin($array) {
    $max = $array[0]; 
    $min = $array[0]; 
  
    $length = count($array); 
  
    for ($i = 1; $i < $length; $i++) {
      if ($array[$i] > $max) {
        $max = $array[$i]; 
      }
  
      if ($array[$i] < $min) {
        $min = $array[$i]; 
      }
    }
    return array('max' => $max, 'min' => $min); 
  }
  $array = array(15, 32, 19, 21, 17, 24);
  $result = findMaxMin($array);
  
  echo "Giá trị lớn nhất trong mảng: " . $result['max'] . "<br>";
  echo "Giá trị nhỏ nhất trong mảng: " . $result['min'];
  ?>
  <br/>

  <?php echo "Câu 6: ";
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortedArray($array) {
    $length = count($array); 
  
    for ($i = 0; $i < $length - 1; $i++) {
      for ($j = 0; $j < $length - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
          // Hoán đổi giá trị nếu phần tử hiện tại lớn hơn phần tử kế tiếp
          $temp = $array[$j];
          $array[$j] = $array[$j + 1];
          $array[$j + 1] = $temp;
        }
      }
    }
    return $array; 
  }
  $array = array(15, 22, 19, 11, 37, 4); 
  $sortedArray = sortedArray($array);
  
  echo "Mảng đã được sắp xếp theo thứ tự tăng dần: ";
  foreach ($sortedArray as $value) {
    echo $value . " ";
  }
  ?>
  <br/>

  <?php echo "Câu 7: ";
//Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calculateFactorial($n) {
    if ($n == 0) {
      return 1; // Giai thừa của 0 là 1
    } else {
      $factorial = 1;
      for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
      }
      return $factorial;
    }
  }
  $n = 5; 
  $result = calculateFactorial($n);
  echo "Giai thừa của $n là: $result";
  ?>
  <br/>

  <?php echo "Câu 8: ";
//Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($n) {
    if ($n <= 1) {
      return false; 
    }
    
    for ($i = 2; $i <= sqrt($n); $i++) {
      if ($n % $i == 0) {
        return false; 
      }
    }
    
    return true; 
  }
  $lowerLimit = 1; 
  $upperLimit = 100;
  
  echo "Các số nguyên tố trong khoảng $lowerLimit đến $upperLimit: ";
  for ($n = $lowerLimit; $n <= $upperLimit; $n++) {
    if (isPrime($n)) {
      echo $n . " ";
    }
  }
  ?>
  <br/>

  <?php echo "Câu 9: ";
//Viết chương trình PHP để tính tổng của các số trong một mảng.
function calculateSum9($array) {
    $sum = 0; // Khởi tạo biến sum với giá trị ban đầu là 0
  
    foreach ($array as $n) {
      $sum += $n; // Cộng giá trị của mỗi phần tử trong mảng vào biến sum
    }
    return $sum; 
  }
  $n = array(1, 2, 3, 4, 5);  
  $total = calculateSum9($n);  
  echo "Tổng của các số trong mảng là: " . $total;
  ?>
  <br/>

  <?php echo "Câu 10: ";
//Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function generateFibonacci($n) {
    $fibonacci = array(0, 1); // Khởi tạo mảng Fibonacci với hai phần tử đầu tiên là 0 và 1
  
    for ($i = 2; $i < $n; $i++) {
      $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; 
    }
    return $fibonacci;
  }
  
  $lowerLimit = 0; 
  $upperLimit = 10; 
  $fibonacciNumbers = generateFibonacci($upperLimit);
  echo "Các số Fibonacci trong khoảng $lowerLimit đến $upperLimit là: ";
  
  foreach ($fibonacciNumbers as $number) {
    if ($number >= $lowerLimit && $number <= $upperLimit) {
      echo $number . " ";
    }
  }
  ?>
<br/>

  <?php echo "Câu 11: ";
//Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.(là một số mà tổng lũy thừa các chữ số của nó bằng chính nó. vd: 371 = 3^3+7^3+1^3)
function isArmstrong($number) {
    $originalNumber = $number;
    $sum = 0;
  
    $numDigits = strlen((string) $number);
  
    while ($number > 0) {
      $digit = $number % 10;
      $sum += pow($digit, $numDigits);
      $number = (int) ($number / 10);
    }

    if ($sum === $originalNumber) {
      return true;
    } else {
      return false;
    }
  }
  $number = 224; 
  if (isArmstrong($number)) {
    echo "$number là số Armstrong.";
  } else {
    echo "$number không là số Armstrong.";
  }
  ?>
<br/>

  <?php echo "Câu 12: ";
//Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
    array_splice($array, $position, 0, $element);
    return $array;
  }
  $originalArray = [1, 2, 3, 4, 5]; 
  $elementToInsert = 10; 
  $insertPosition = 2; 
  
  $newArray = insertElement($originalArray, $elementToInsert, $insertPosition);
  echo "Mảng sau khi chèn phần tử là: ";
  print_r($newArray);
  ?>
<br/>

<?php echo "Câu 13: ";
//Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($array) {
    return array_unique($array);
  }
  $originalArray = [1, 2, 3, 2, 4, 5, 3, 6]; 
  $uniqueArray = removeDuplicates($originalArray);
  
  echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
  print_r($uniqueArray);
  ?>
<br/>

<?php echo "Câu 14: ";
//Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findElementPosition($array, $element) {
    $positions = [];
    foreach ($array as $index => $value) {
      if ($value === $element) {
        $positions[] = $index;
      }
    }
    return $positions;
  }
  $originalArray = [1, 2, 3, 4, 5, 3, 6]; 
  $searchElement = 3; 
  
  $elementPositions = findElementPosition($originalArray, $searchElement);
  if (count($elementPositions) > 0) {
    echo "Vị trí của phần tử $searchElement trong mảng là: ";
    echo implode(", ", $elementPositions);
  } else {
    echo "Phần tử $searchElement không tồn tại trong mảng.";
  }
  ?>
  <br/>

<?php echo "Câu 15: ";
//Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string) {
    $reversedString = "";
    $length = strlen($string);
    
    for ($i = $length - 1; $i >= 0; $i--) {
      $reversedString .= $string[$i];
    }
    return $reversedString;
  }
  $inputString = "Hello, Duong Thuy Linh"; 
  $reversedString = reverseString($inputString); 
  echo "Chuỗi đảo ngược là: " . $reversedString;
  ?>
<br/>

<?php echo "Câu 16: ";
//Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($array) {
    $count = count($array);
    return $count;
  }
  
  $array = [1, 2, 3, 4, 5]; 
  $elementCount = countElements($array); 
  echo "Số lượng phần tử trong mảng là: " . $elementCount;
  ?>
  <br/>

<?php echo "Câu 17: ";
//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.(Một chuỗi Palindrome là một chuỗi mà khi đọc từ trái sang phải hay từ phải sang trái, nó đều giống nhau. )
function isPalindrome($string) {
    // Loại bỏ khoảng trắng và đưa về chữ thường để kiểm tra
    $lowercaseString = strtolower(str_replace(' ', '', $string));
    $reversedString = strrev($lowercaseString);

    // So sánh chuỗi gốc với chuỗi đảo ngược
    if ($lowercaseString === $reversedString) {
        return true;
    } else {
        return false;
    }
}
$inputString = "Duong Thuy Linh";
if (isPalindrome($inputString)) {
    echo "Chuỗi là chuỗi Palindrome";
} else {
    echo "Chuỗi không phải là chuỗi Palindrome";
}
?>
<br/>

<?php echo "Câu 18: ";
//Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element) {
    $count = 0;
    foreach ($array as $value) {
        if ($value == $element) {
            $count++;
        }
      }
    return $count;
}

$numbers = [1, 2, 3, 5, 2, 1, 2, 3, 4, 1, 2, 3];
$element = 2;

$occurrences = countOccurrences($numbers, $element);
echo "Số lần xuất hiện của phần tử $element trong mảng là: $occurrences";
?>
<br/>

<?php echo "Câu 19: ";
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortArrayDescending($array) {
    // Sắp xếp mảng theo thứ tự giảm dần
    arsort($array);

    return $array;
}
$numbers = [25, 12, 36, 51, 23];
$sortedArray = sortArrayDescending($numbers);
echo "Mảng đã được sắp xếp theo thứ tự giảm dần: ";
foreach ($sortedArray as $number) {
    echo $number . " ";
}
?>
<br/>

<?php echo "Câu 20: ";
//Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
//Thêm vào đầu mảng
function addElementToFront($array, $element) {
    array_unshift($array, $element);
    return $array;
}
$names = ['Linh', 'Chi', 'Thuy'];
$newNames = addElementToFront($names, 'Duong');

print_r($newNames);
echo '<br>';
//Thêm vào cuối mảng
function addElementToBack($array, $element) {
    $array[] = $element;
    return $array;
}
$names = ['Linh', 'Chi', 'Thuy'];
$newNames = addElementToBack($names, 'Duong');

print_r($newNames);
?>
<br/>

<?php echo "Câu 21: ";
//Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($array) {
    // Sắp xếp mảng theo thứ tự giảm dần
    rsort($array);
    $secondLargest = $array[1];
    return $secondLargest;
}
$numbers = [15, 10, 25, 20, 5];
$secondLargestNumber = findSecondLargest($numbers);
echo "Số lớn thứ hai trong mảng là: " . $secondLargestNumber;
?>
<br/>

<?php echo "Câu 22: ";
//Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}
function findBSCNN($a, $b) {
    $USCLN = findUSCLN($a, $b);
    $BSCNN = ($a * $b) / $USCLN;
    return $BSCNN;
}
$number1 = 41;
$number2 = 26;

$USCLN = findUSCLN($number1, $number2);
$BSCNN = findBSCNN($number1, $number2);

echo "USCLN của $number1 và $number2 là: " . $USCLN . "<br>";
echo "BSCNN của $number1 và $number2 là: " . $BSCNN;
?>
<br/>

<?php echo "Câu 23: ";
//Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.(Một số hoàn hảo là một số nguyên dương mà tổng các ước số của nó (không kể chính nó) bằng chính nó)
function isPerfectNumber($number) {
    $sum = 0;

    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
$number = 20;
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo";
} else {
    echo "$number không là số hoàn hảo";
}
?>
<br/>

<?php echo "Câu 24: ";
//Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($array) {
  $largestOddNumber = null;

  foreach ($array as $number) {
    if ($number % 2 !== 0) { 
      if ($largestOddNumber === null || $number > $largestOddNumber) {
        $largestOddNumber = $number;
      }
    }
  }
  return $largestOddNumber;
}
$array = [21, 13, 35, 12, 24, 37, 19, 56]; 

$largestOddNumber = findLargestOddNumber($array);
if ($largestOddNumber === null) {
  echo "Không có số lẻ trong mảng.";
} else {
  echo "Số lẻ lớn nhất trong mảng là: " . $largestOddNumber;
}
?>
<br/>

<?php echo "Câu 25: ";
//Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($number) {
  if ($number <= 1) {
    return false;
  }

  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i === 0) {
      return false;
    }
  }
  return true;
}
$inputNumber = 55; 
if (isPrimeNumber($inputNumber)) {
  echo "$inputNumber là số nguyên tố.";
} else {
  echo "$inputNumber không phải là số nguyên tố.";
}
?>
<br/>

<?php echo "Câu 26: ";
//Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositiveNumber($array) {
  $largestPositiveNumber = null;

  foreach ($array as $number) {
    if ($number > 0) { 
      if ($largestPositiveNumber === null || $number > $largestPositiveNumber) {
        $largestPositiveNumber = $number;
      }
    }
  }
  return $largestPositiveNumber;
}

$array = [-12, 22, -10, 78, 0, 19, 35]; 

$largestPositiveNumber = findLargestPositiveNumber($array);

if ($largestPositiveNumber === null) {
  echo "Không có số dương trong mảng.";
} else {
  echo "Số dương lớn nhất trong mảng là: " . $largestPositiveNumber;
}
?>
<br/>

<?php echo "Câu 27: ";
//Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegativeNumber($array) {
  $largestNegativeNumber = null;

  foreach ($array as $number) {
    if ($number < 0) { 
      if ($largestNegativeNumber === null || $number > $largestNegativeNumber) {
        $largestNegativeNumber = $number;
      }
    }
  }
  return $largestNegativeNumber;
}
$array = [-12, 22, -10, 78, 0, 19, 35]; 
$largestNegative = findLargestNegativeNumber($array);

if ($largestNegative === null) {
  echo "Không có số âm trong mảng.";
} else {
  echo "Số âm lớn nhất trong mảng là: " . $largestNegative;
}
?>
<br/>

<?php echo "Câu 28: ";
//Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOfOddNumbers($n) {
  $sum = 0;
  for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 != 0) { 
      $sum += $i;
    }
  }
  return $sum;
}
$n = 100; 
$result = sumOfOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: $result";
?>
<br/>
<?php echo "Câu 29: ";
//Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end) {
  $perfectSquares = array();

  for ($i = $start; $i <= $end; $i++) {
    $sqrt = sqrt($i);
    if ($sqrt == floor($sqrt)) { 
      $perfectSquares[] = $i;
    }
  }
  return $perfectSquares;
}
$start = 1; 
$end = 50; 
$result = findPerfectSquares($start, $end);

echo "Các số chính phương trong khoảng $start đến $end: ";
foreach ($result as $number) {
  echo $number . " ";
}
?>
<br/>

<?php echo "Câu 30: ";
//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($string, $substring) {
  $strLength = strlen($string);
  $subLength = strlen($substring);

  if ($subLength > $strLength) {
    return false;
  }

  for ($i = 0; $i <= $strLength - $subLength; $i++) {
    $j = 0;
    while ($j < $subLength && $string[$i + $j] == $substring[$j]) {
      $j++;
    }
    if ($j == $subLength) {
      return true;
    }
  }
  return false;
}
$string = "Duong Thuy Linh";
$substring = "Linh";
$result = isSubstring($string, $substring);

if ($result) {
  echo "Chuỗi '$substring' là chuỗi con của chuỗi '$string'.";
} else {
  echo "Chuỗi '$substring' không là chuỗi con của chuỗi '$string'.";
}
?>
  </html>
