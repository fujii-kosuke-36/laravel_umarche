## udemy Laravel講座

## インストール方法

## インストール後の実施事項

画像のダミーデータは
public/imagesフォルダ内に
sample.jpg 〜 sample3 として
保存しています。

php artisan storage:link　で
storageフォルダにリンク後、

storage/app/public/productsフォルダに
保存すると表示されます。
(productsフォルダがない場合は作成してください。)

ショップの画像も表示する場合は、
storage/app/public/shopsフォルダを作成し
画像を保存してください。