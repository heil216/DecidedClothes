@extends('components.layouts')
@section('title','ParsonalColor')
<x-layout>
        <form method="POST" action=" {{ route('store') }}">
            @csrf
            
            <fieldset>
            <legend>Q1.瞳の色は？</legend>
            <label><input type="radio" name="question[eye]" value="A">明るめのブラウンorソフトなブラック。キラキラと輝いてみえる。</label>
            <label><input type="radio" name="question[eye]" value="B">赤みのブラウンorグレイッシュな黒。黒目と白目の境がやわらかな印象。</label>
            <label><input type="radio" name="question[eye]" value="C">ダークブラウンorブラック。落ち着いた印象がある。</label>
            <label><input type="radio" name="question[eye]" value="D">ブラックor赤みのダークブラウン。白目と黒目のコントラストがくっきり。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q2.髪(地毛)の色は？</legend>
            <label><input type="radio" name="question[hair]" value="A">陽に当たるとやわらかなブラウン。</label>
            <label><input type="radio" name="question[hair]" value="B">ソフトでやわらかい質感の黒髪。</label>
            <label><input type="radio" name="question[hair]" value="C">深みのあるブラウン。</label>
            <label><input type="radio" name="question[hair]" value="D">コシが強く艶やかではっきりとした黒。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q3.肌の色は？</legend>
            <label><input type="radio" name="question[skin]" value="A">明るいアイボリー系。皮膚が薄めでツヤがある。</label>
            <label><input type="radio" name="question[skin]" value="B">血色の良い明るめのピンク系。質感はややマットで頬に赤みが出やすい。</label>
            <label><input type="radio" name="question[skin]" value="C">オークル系でマットな質感。くすみやすいことも。</label>
            <label><input type="radio" name="question[skin]" value="D">ピンク系の色白肌、もしくは地黒肌。艶があり血色は感じにくい。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q4.日焼けすると</legend>
            <label><input type="radio" name="question[burn]" value="A">日焼けしやすいが、もどるのも早い。赤くなることも。</label>
            <label><input type="radio" name="question[burn]" value="B">赤くなりやすい。吸収せずにすぐに元の色に戻る。</label>
            <label><input type="radio" name="question[burn]" value="C">日焼けしやすく、吸収して黒くなる。元の色に戻りにくい。</label>
            <label><input type="radio" name="question[burn]" value="D">やや赤くなり、その後黒くなる。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q5.元の唇の色は？</legend>
            <label><input type="radio" name="question[rip]" value="A">淡いサーモンピンクorうすめのベージュ系。</label>
            <label><input type="radio" name="question[rip]" value="B">ピンク、ローズ系。</label>
            <label><input type="radio" name="question[rip]" value="C">落ち着いたオレンジorベージュ系。血色は控えめ。</label>
            <label><input type="radio" name="question[rip]" value="D">ローズ系。血色がなく青ざめてみえることも。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q6.しっくりくるリップの色は？</legend>
            <label><input type="radio" name="question[goodrip]" value="A">コーラル・オレンジ系。明るくツヤがかった発色。</label>
            <label><input type="radio" name="question[goodrip]" value="B">ピンク、ローズ系。明るくやわらかな発色。</label>
            <label><input type="radio" name="question[goodrip]" value="C">くすみオレンジ・ブラウン系。落ち着いた発色。</label>
            <label><input type="radio" name="question[goodrip]" value="D">フューシャピンク・ボルドー系。鮮やかor深みのある発色。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q7.反対に苦手なリップの色は？</legend>
            <label><input type="radio" name="question[badrip]" value="A">ワイン系。深くて暗めの色だと顔色が悪くなる。</label>
            <label><input type="radio" name="question[badrip]" value="B">オレンジ・レッド系。オレンジ系や高発色だと唇だけ目立つ。</label>
            <label><input type="radio" name="question[badrip]" value="C">フューシャピンク・ローズ系。青みが強いと肌から浮いて派手になる。</label>
            <label><input type="radio" name="question[badrip]" value="D">ベージュ系、薄い色だとパッとせずにぼやける。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q8.比較的似合うアクセサリーは？</legend>
            <label><input type="radio" name="question[accesary]" value="A">キラキラしたツヤありゴールド。</label>
            <label><input type="radio" name="question[accesary]" value="B">光沢控えめのプラチナ、シルバー。</label>
            <label><input type="radio" name="question[accesary]" value="C">黄みの強いゴールドorマットゴールド。</label>
            <label><input type="radio" name="question[accesary]" value="D">艶のあるプラチナ、シルバー。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q9.ベーシックカラーで得意な色は？</legend>
            <label><input type="radio" name="question[basic]" value="A">ベージュやキャメルを着ると、顔色が明るく健康的にみえる。</label>
            <label><input type="radio" name="question[basic]" value="B">グレーやネイビーを着ると、肌が白くみえ、上品な印象になる。</label>
            <label><input type="radio" name="question[basic]" value="C">カーキやブラウンを着ても、地味にならずおしゃれな印象になる。</label>
            <label><input type="radio" name="question[basic]" value="D">黒を着ても重たくならずに引き締まってシャープな印象になる。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q10.身近な人に褒められる色は？</legend>
            <label><input type="radio" name="question[complimented]" value="A">黄色やオレンジ、コーラルピンクなどのあたたかみのあるビタミンカラー。</label>
            <label><input type="radio" name="question[complimented]" value="B">淡い水色やラベンダーなどの優しげなパステルカラー。</label>
            <label><input type="radio" name="question[complimented]" value="C">マスタードやテラコッタなどのこっくりとしたアースカラー。</label>
            <label><input type="radio" name="question[complimented]" value="D">ロイヤルブルーやマゼンダなどの鮮やかなビビットカラー。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q11.周りからよく言われる第一印象は？</legend>
            <label><input type="radio" name="question[firstimpression]" value="A">年齢より若く見える、親しみやすい、明るい。</label>
            <label><input type="radio" name="question[firstimpression]" value="B">優しげ、爽やか、品がある。</label>
            <label><input type="radio" name="question[firstimpression]" value="C">落ち着ている、穏やか、ナチュラル。</label>
            <label><input type="radio" name="question[firstimpression]" value="D">クール、華やか、印象が強い。</label>
            </fieldset>
            <input type="submit" value="カウントする"/>
        </form>
        <!--<p>戻る</p>-->
  
        [<a href="{{ route('step2') }}">STEP2に進む</a>]
        [<a href="{{ route('index') }}">HOMEに戻る</a>]
</x-layout>