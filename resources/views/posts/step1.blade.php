@extends('components.layout')
@section('title','ParsonalColor')
<x-layout>
        <main>
            <fieldset>
            <legend>Q1.瞳の色は？</legend>
            <label><input type="radio" name="eye">[A]明るめのブラウンorソフトなブラック。キラキラと輝いてみえる。</label>
            <label><input type="radio" name="eye">[B]赤みのブラウンorグレイッシュな黒。黒目と白目の境がやわらかな印象。</label>
            <label><input type="radio" name="eye">[C]ダークブラウンorブラック。落ち着いた印象がある。</label>
            <label><input type="radio" name="eye">[D]ブラックor赤みのダークブラウン。白目と黒目のコントラストがくっきり。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q2.髪(地毛)の色は？</legend>
            <label><input type="radio" name="hair">[A]陽に当たるとやわらかなブラウン。</label>
            <label><input type="radio" name="hair">[B]ソフトでやわらかい質感の黒髪。</label>
            <label><input type="radio" name="hair">[C]深みのあるブラウン。</label>
            <label><input type="radio" name="hair">[D]コシが強く艶やかではっきりとした黒。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q3.肌の色は？</legend>
            <label><input type="radio" name="skin">[A]明るいアイボリー系。皮膚が薄めでツヤがある。</label>
            <label><input type="radio" name="skin">[B]血色の良い明るめのピンク系。質感はややマットで頬に赤みが出やすい。</label>
            <label><input type="radio" name="skin">[C]オークル系でマットな質感。くすみやすいことも。</label>
            <label><input type="radio" name="skin">[D]ピンク系の色白肌、もしくは地黒肌。艶があり血色は感じにくい。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q4.日焼けすると</legend>
            <label><input type="radio" name="burn">[A]日焼けしやすいが、もどるのも早い。赤くなることも。</label>
            <label><input type="radio" name="burn">[B]赤くなりやすい。吸収せずにすぐに元の色に戻る。</label>
            <label><input type="radio" name="burn">[C]日焼けしやすく、吸収して黒くなる。元の色に戻りにくい。</label>
            <label><input type="radio" name="burn">[D]やや赤くなり、その後黒くなる。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q5.元の唇の色は？</legend>
            <label><input type="radio" name="rip">[A]淡いサーモンピンクorうすめのベージュ系。</label>
            <label><input type="radio" name="rip">[B]ピンク、ローズ系。</label>
            <label><input type="radio" name="rip">[C]落ち着いたオレンジorベージュ系。血色は控えめ。</label>
            <label><input type="radio" name="rip">[D]ローズ系。血色がなく青ざめてみえることも。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q6.しっくりくるリップの色は？</legend>
            <label><input type="radio" name="goodrip">[A]コーラル・オレンジ系。明るくツヤがかった発色。</label>
            <label><input type="radio" name="goodrip">[B]ピンク、ローズ系。明るくやわらかな発色。</label>
            <label><input type="radio" name="goodrip">[C]くすみオレンジ・ブラウン系。落ち着いた発色。</label>
            <label><input type="radio" name="goodrip">[D]フューシャピンク・ボルドー系。鮮やかor深みのある発色。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q7.反対に苦手なリップの色は？</legend>
            <label><input type="radio" name="badrip">[A]ワイン系。深くて暗めの色だと顔色が悪くなる。</label>
            <label><input type="radio" name="badrip">[B]オレンジ・レッド系。オレンジ系や高発色だと唇だけ目立つ。</label>
            <label><input type="radio" name="badrip">[C]フューシャピンク・ローズ系。青みが強いと肌から浮いて派手になる。</label>
            <label><input type="radio" name="badrip">[D]ベージュ系、薄い色だとパッとせずにぼやける。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q8.比較的似合うアクセサリーは？</legend>
            <label><input type="radio" name="accesary">[A]キラキラしたツヤありゴールド。</label>
            <label><input type="radio" name="accesary">[B]光沢控えめのプラチナ、シルバー。</label>
            <label><input type="radio" name="accesary">[C]黄みの強いゴールドorマットゴールド。</label>
            <label><input type="radio" name="accesary">[D]艶のあるプラチナ、シルバー。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q9.ベーシックカラーで得意な色は？</legend>
            <label><input type="radio" name="goodbasiccolor">[A]ベージュやキャメルを着ると、顔色が明るく健康的にみえる。</label>
            <label><input type="radio" name="goodbasiccolor">[B]グレーやネイビーを着ると、肌が白くみえ、上品な印象になる。</label>
            <label><input type="radio" name="goodbasiccolor">[C]カーキやブラウンを着ても、地味にならずおしゃれな印象になる。</label>
            <label><input type="radio" name="goodbasiccolor">[D]黒を着ても重たくならずに引き締まってシャープな印象になる。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q10.身近な人に褒められる色は？</legend>
            <label><input type="radio" name="complimentedcolor">[A]黄色やオレンジ、コーラルピンクなどのあたたかみのあるビタミンカラー。</label>
            <label><input type="radio" name="complimentedcolor">[B]淡い水色やラベンダーなどの優しげなパステルカラー。</label>
            <label><input type="radio" name="complimentedcolor">[C]マスタードやテラコッタなどのこっくりとしたアースカラー。</label>
            <label><input type="radio" name="complimentedcolor">[D]ロイヤルブルーやマゼンダなどの鮮やかなビビットカラー。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q11.周りからよく言われる第一印象は？</legend>
            <label><input type="radio" name="firstimpression">[A]年齢より若く見える、親しみやすい、明るい。</label>
            <label><input type="radio" name="firstimpression">[B]優しげ、爽やか、品がある。</label>
            <label><input type="radio" name="firstimpression">[C]落ち着ている、穏やか、ナチュラル。</label>
            <label><input type="radio" name="firstimpression">[D]クール、華やか、印象が強い。</label>
            </fieldset>
        </main>
        <!--<p>戻る</p>-->
        [<a href="{{ route('posts.step2') }}">STEP2に進む</a>]
        [<a href="{{ route('posts.index') }}">HOMEに戻る</a>]
</x-layout>