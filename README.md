## 実行履歴とやることリスト

進捗状況
2024/2/1
    サーバーと連携を行うにはfetchを使えばいけそう
    fetchはreactではなくjsのメソッドっぽい
    fetch.jsのコンポーネントを作成してそこにアクセスするURL
    この場合はAPIつまりController名を指定すればサーバーにアクセスできた
    ただし、ローカル同士のアクセスなのでApacheにCORS設定を行わないとアクセスができず403になってしまう
    .htaccessファイルにCORS許可の設定を追記する
    <IfModule mod_headers.c>
    Header set Access-Control-Allow-Origin "*"
    Header set Access-Control-Allow-Methods "GET, POST, OPTIONS"
    Header set Access-Control-Allow-Headers "Origin, X-Requested-With, Content-Type, Accept"
    </IfModule>
    fetchの際にPOSTでControllerにアクセスすると403だがGETでアクセスするとディベロッパーツール上で200OKとなり
    プレビューにcontrollerに記載したechoが表示されていたのでアクセスに成功したような気がする
2024/1/30
    サーバーとフロントを連携させるためにはreact rooterを使う必要がありそう
    npm インストールでreact rooter domをインストールしてみる
    react rooterを使って画面間のリンクをさせることに成功！
2024/1/28:reactインストール
    reactの公式サイトでリアクトの基礎を学ぶ
    公式ではnext.jsのインストールが必須になっていたが嫌なのでreact単体をインストール
    nodeはhomebrewインストールしたときに入っていた？node -vでインストールされていること確認
    reactインストールしたいディレクトリでnpm create-react-app プロジェクト名　でインストール完了
    サーバーとの連携を考えてMAMPのhtdocsにインストール
    npm run startで開始、終了はコマンド＋C２回かターミナル終了
    tailwindcss導入
    https://tailwindcss.com/docs/installation
    公式に従ってインストール
    index.cssは自分で追加して追記
    App.cssに記載されているCSSはすべてコメントアウトしておいて
    tailwindcss を読み込むためにoutput.cssをインポートする必要あり、と思ったがなくても大丈夫そう
    なぜか反映されなくてかなり悩んdがClassNameではなくclassNameだった

2024/1/13:独自MVC完成
            Formヘルパーのメソッドを覚えるとパラメータの更新が可能になるのでよく理解する必要がありそう
            今回使ったものは
                form->create :フォームの作成
                form->control :パラメータの設定
                forom->button :submitボタンの作成
            最後に完了したTODOはボタンを押せないようにして仕上げ
                is_doneの値の取得は$todo->is_done != 1でできた
2024/1/12:TODOのView作成
            edit作成開始
            完了→edit画面→送信で完了　まで作成
            ただ、画面は切り替わるがis_doneが更新されない！
            →これを解決して、完了→is_done = 1となれば事実は晴れると思う
                →これもFormヘルパーを使って実現可能だった
                Form->controlでis_doneを1でパラメータ送信すればcontroller側では特に処理は不要だった
2024/1/4:TODOのモデルとコントローラーを作成次はViewから  
            コントローラーは完了フラグis_doneが考慮されていなそうなのでこれを更新する処理を加える必要がありそう
2024/1/4:TODOのView作成  
            indexとadd完了、editで完了フラグをつけらればとりあえず完成

### フェーズ１

- [x] MAMPで環境構築
- [x] ローカルのファイルをgithubのリモートリポジトリにPush
- [x] cakePHPインストール
- [x] bakeの実行
- [x] ブックマークサイトの作成  
※bakeが思いの外すごくて全くコード書かなくてサイトができてしまったので以下追加
- [x] 独自でMVCの作成  
TODOリスト  
M:id,todo,is_done,modified,created  
C:indexに一覧表示、完了メソッド  
V：indexにTODO一覧表示、完了ボタンでチェックマークがつく  
- [ ] maigretionファイルの作成
### フェーズ２
- [x] reactインストール
- [x] materialUI導入
### フェーズ３
- [x] tailwindcss導入
- [x] reactからfetchを使ってAPI呼び出し
- [] ControllerでDBから値を取得するAPIを作成
- [] react側でAPIをリクエストしてDBの値を表示
- [] reactで送信した値をDBに保存する
- [] TODOリストのフロントをreactで実装する
