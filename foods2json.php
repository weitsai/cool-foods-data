<?php
$foods = [];
# 寒
## 菜類
$coldDishes = ['蕹菜（空心）', '竹筍', '瓢瓜（葫蘆）', '苦瓜', '冬瓜', '番茄', '銀耳', '海帶', '海藻', '金針菇', '鮮蘑菇', '荸薺', '慈菇（茨菰）', '蘿蔔', '小麥草', '龍葵', '西葫蘆', '馬齒莧', '蓴菜', '苦菊菜', '生蓮藕', '蕨菜', '蕨根粉', '蘆筍', '酸菜'];

## 水果
$coldFruit = ['柿子', '柿餅', '香蕉', '楊桃', '奇異果（獼猴桃）', '西瓜', '香瓜', '哈密瓜', '梨', '鳳梨（菠蘿）', '甘蔗', '椰子汁', '蓮子心', '檳榔', '檸檬', '柚子', '橘子', '臍橙', '柳丁（橙子）', '蓮霧'];

## 其它
$coldOther = ['冰品', '綠茶', '味精（味素）', '人工飲料', '化學食品', '化學藥品', '菊花', '決明子', '糖精', '白糖', '冰糖'];


$foods['clod'] = ['Dishes' => $coldDishes,
  'Fruit' => $coldFruit,
  'Other' => $coldOther];

# 涼
## 穀類
$coolGrain = ['大麥', '蕎麥', '綠豆', '薏米', '黃豆', '西谷米', '大米'];
## 菜類
$coolDishes = ['莧菜', '菠菜', '萵苣', '青江菜', 'A菜', '茄子', '絲瓜', '黃瓜', '茭白筍', '油菜', '白花菜', '青椒(柿子椒)', '苤藍(甘藍)', '金針花(黃花菜)', '黑木耳', '竹蓀(竹笙)', '腐竹', '豆腐(含皮', '干', '乳)', '白菜', '紫菜薹', '黃心菜', '生菜', '油麥菜', '芹菜', '豆芽菜', '秋葵', '牛蒡', '猴頭菇', '香菇', '菱角', '蕃薯（紅薯）'];
## 果類
$coolFruit = ['金桔', '枇杷', '蘋果', '無花果', '芒果', '火龍果', '百合', '桑葚', '菠蘿蜜', '草莓', '杏', '釋迦', '葡萄（乾）', '龍眼（乾）', '木瓜', '櫻桃', '酪梨', '楊梅', '冬棗', '桃', '李子', '番石榴', '石榴', '荔枝', '橄欖', '佛手柑', '榴槤', '山楂', '大棗'];
## 其它
$coolOther = ['生水（純淨水', '礦泉水）', '紅茶', '膨大海', '羅漢果', '薄荷', '荷葉', '蜂蜜', '蜂王漿', '蜂膠', '花粉', '巧克力', '豆漿', '玉米鬚', '醋', '醬油', '鹽', '沙拉醬', '牛奶', '優酪乳（酸奶）', '咖啡', '燕窩', '魔芋（蒟蒻）', '飴糖（麥芽糖）', '紅糖'];


$foods['cool'] = ['Grain' => $coolGrain,
  'Dishes' => $coolDishes,
  'Fruit' => $coolFruit,
  'Other' => $coolOther];

# 平
## 穀類
$usuallyGrain = ['小米', '玉米', '白豆', '豌豆', '扁豆', '蠶豆', '赤小豆', '黑豆', '燕麥'];
## 菜類
$usuallyDishes = ['胡蘿蔔', '豇豆', '豆角', '豆豉', '芋頭', '包心菜(圓白菜', '高麗菜)', '芥藍菜', '綠花菜(西蘭花)', '蓋菜(芥菜)', '雪裡紅', '青菜頭(榨菜頭', '鮮榨菜)', '馬鈴薯', '地瓜葉', '乾蘑菇', '烤麩', '麵筋（油麵筋', '水麵筋）', '茼蒿（蒿子稈）', '南瓜', '山藥', '蓮藕（熟吃）'];
## 果類
$usuallyFruit = ['南瓜子', '葵花子', '芡實', '蓮子', '花生', '栗子'];
## 其它
$usuallyOther = ['各種蛋', '黃醬', '麵醬'];

$foods['cool'] = ['Grain' => $coolGrain,
  'Dishes' => $coolDishes,
  'Fruit' => $coolFruit,
  'Other' => $coolOther];



#溫類
## 穀類
$warmGrain = ['小麥', '高梁', '黑米', '糯米（江米）', '炒芝麻'];
## 菜類
$warmDishes = ['生薑', '香樁頭', '九層塔', '香菜(芫荽)', '洋蔥', '大蒜', '韭菜', '蒜苗'];
## 果類
$warmFruit = ['松子仁', '杏仁', '核桃仁', '榛子', '開心果', '香榧子', '炒栗子', '炒花生', '炒瓜子', '炒腰果'];
## 其它
$warmOther = ['純芝麻醬'];

$foods['warm'] = ['Grain' => $warmGrain,
  'Dishes' => $warmDishes,
  'Fruit' => $warmFruit,
  'Other' => $warmOther];

#熱
$hotDishes = ['辣椒', '芥末', '薑', '五香粉', '咖哩粉', '胡椒粉', '茴香菜', '小茴香', '花椒', '肉桂（桂皮）', '丁香', '八角（大料）'];
$foods['hot'] = ['Dishes' => $hotDishes];

$json = json_encode($foods);
$file = fopen('foods.json',"w");
echo fwrite($file, $json);
