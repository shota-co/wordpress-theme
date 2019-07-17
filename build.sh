echo '新しいバージョン名を入力してください'
vi ./style.css
cat ./style.css
echo 'テーマzipファイルを作成します'
zip wordpress-theme *.php build components style.css screenshot.png -r
