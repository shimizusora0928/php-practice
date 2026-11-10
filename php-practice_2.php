<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo "tic-tac\n";
  } elseif ($i % 4 === 0) {
    echo "tic\n";
  } elseif ($i % 5 === 0) {
    echo "tac\n";
  } else {
    echo $i. "\n";
  }
}

for ($i = 1; $i <= 100; $i++) {
  echo match (true) {
    $i % 4 === 0 && $i % 5 === 0 => "tic-tac\n",
    $i % 4 === 0 => "tic\n",
    $i % 5 === 0 => "tac\n",
    default => "$i\n",
  };
}

// Q2 多次元連想配列
// 問題1
$personalInfos = [
  [
    'name' => 'Aさん',
    'mail' => 'aaa@mail.com',
    'tel'  => '09011112222'
  ],
  [
    'name' => 'Bさん',
    'mail' => 'bbb@mail.com',
    'tel'  => '08033334444'
  ],
  [
    'name' => 'Cさん',
    'mail' => 'ccc@mail.com',
    'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name'], "の電話番号は", $personalInfos[1]['tel'], "です。";

// 問題2
foreach ($personalInfos as $index => $info) {
    $number = $index + 1;
    echo $number. "番目の". $info['name']. "のメールアドレスは". $info['mail']. "で、電話番号は". $info['tel']. "です。\n";
}

// 問題3
$ageList = [25, 30, 18];
$personalList = [];
foreach ($personalInfos as $key => $info) {
  $info['age'] = $ageList[$key];
  $personalList[] = $info;
}
var_dump($personalList);
// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend(string $course)
    {
        echo $this->studentName.'は'. $course. 'の授業に出席しました。学籍番号：'. $this->studentId;
    }
}
$student = new Student(46, "遠藤");
echo "学籍番号". $student->studentId. "番の生徒は". $student->studentName. "です。";

// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問題1
$date = new DateTime('-1 year', new DateTimeZone('Asia/Tokyo'));
echo $date->format('Y-m-d');

// 問題2
$timezone = new DateTimeZone('Asia/Tokyo');
$currentDate = new DateTime('now', $timezone);
$targetDate = new DateTime('1992-4-25', $timezone);
$interval = $targetDate->diff($currentDate);

echo "あの日から". $interval->format('%a'). "日経過しました。";
?>