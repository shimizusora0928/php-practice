<?php
// Q1 変数と文字列
$name = "清水";
echo "私の名前は「". $name. "」です。";

// Q2 四則演算
$num = 5 * 4;
echo $num. "\n";
echo $num / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$currentTime = date('Y年m月d日 H時i分s秒');
echo "現在時刻は、". $currentTime. "です。";

// Q4 条件分岐-1 if文
$device = "MacOSではない";

if ($device === "windows" || $device === "mac") {
  echo "使用OSは、". $device. "です。";
} else {
  echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子
$age = 1;
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;

// Q6 配列
$area = ["東京都", "神奈川県", "千葉県", "埼玉県", "茨城県", "栃木県", "群馬県"];
echo $area[3]. "と". $area[4]. "は関東地方の都道府県です。";

// Q7 連想配列-1
$areas = [
  "東京都" => "新宿区", 
  "神奈川県" => "横浜市", 
  "千葉県" => "千葉市", 
  "埼玉県" => "さいたま市", 
  "茨城県" => "水戸市", 
  "栃木県" => "宇都宮市", 
  "群馬県" => "前橋市"
  ];

  foreach ($areas as $area) {
    echo $area. "\n";
  }

// Q8 連想配列-2
foreach ($areas as $prefecture => $capitalCity) {
  if ($prefecture === "埼玉県" && $capitalCity === "さいたま市") {
    echo $prefecture. "の県庁所在地は、". $capitalCity. "です。";
    break;
  }
}

// Q9 連想配列-3
$newAreas = ["大阪府" => "大阪市", "愛知県" => "名古屋市"];
$areas = array_merge($areas, $newAreas);

foreach ($areas as $prefecture => $capitalCity) {
  if (in_array($prefecture, ["大阪府", "愛知県"])) {
    echo $prefecture. "は関東地方ではありません。\n";
  } else {
    echo $prefecture. "の県庁所在地は、". $capitalCity. "です。\n";
  }
}

// Q10 関数-1
function hello(string $name): void {
  echo $name. "さん、こんにちは。\n";
}

hello("金谷");
hello("安藤");

// Q11 関数-2

$prise = 100;
$taxInPrice = 0;
function calcTaxInPrice(int $prise): int {
  return $prise * 1.1;
}
$taxInPrice = calcTaxInPrice($prise);
echo $prise. "円の商品の税込価格は". $taxInPrice. "円です。";

// Q12 関数とif文
function distinguishNum(int $prise): void {
  if ($prise % 2 === 0) {
    echo $prise. "は偶数です。\n";
  } else {
    echo $prise. "奇数です。\n";
  }
}
distinguishNum(4);
distinguishNum(3);

// Q13 関数とswitch文
function evaluateGrade(string $Rating): string {
  switch ($Rating) {
    case "A":
    case "B":
      return "合格です。\n";
    case "C":
      return "合格ですが追加課題があります。\n";
    case "D":
      return "不合格です。\n";
    default:
      return "判定不明です。講師に問い合わせてください。\n";
  }
}

echo evaluateGrade("A");
echo evaluateGrade("F");

?>