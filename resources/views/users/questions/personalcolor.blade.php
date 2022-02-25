@extends('layouts.app')
@section('title','パーソナルカラー診断')
@section('content')
        <form method="post" action=" {{ route('diagnose') }}">
            @csrf
            
            <fieldset>
            <legend>Q1.瞳の色は？</legend>
            <label><input type="radio" name="question[eye]" value="Spring">明るめのブラウンorソフトなブラック。キラキラと輝いてみえる。</label>
            <label><input type="radio" name="question[eye]" value="Summer">赤みのブラウンorグレイッシュな黒。黒目と白目の境がやわらかな印象。</label>
            <label><input type="radio" name="question[eye]" value="Autumn">ダークブラウンorブラック。落ち着いた印象がある。</label>
            <label><input type="radio" name="question[eye]" value="Winter">ブラックor赤みのダークブラウン。白目と黒目のコントラストがくっきり。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q2.髪(地毛)の色は？</legend>
            <label><input type="radio" name="question[hair]" value="Spring">陽に当たるとやわらかなブラウン。</label>
            <label><input type="radio" name="question[hair]" value="Summer">ソフトでやわらかい質感の黒髪。</label>
            <label><input type="radio" name="question[hair]" value="Autumn">深みのあるブラウン。</label>
            <label><input type="radio" name="question[hair]" value="Winter">コシが強く艶やかではっきりとした黒。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q3.肌の色は？</legend>
            <label><input type="radio" name="question[skin]" value="Spring">明るいアイボリー系。皮膚が薄めでツヤがある。</label>
            <label><input type="radio" name="question[skin]" value="Summer">血色の良い明るめのピンク系。質感はややマットで頬に赤みが出やすい。</label>
            <label><input type="radio" name="question[skin]" value="Autumn">オークル系でマットな質感。くすみやすいことも。</label>
            <label><input type="radio" name="question[skin]" value="Winter">ピンク系の色白肌、もしくは地黒肌。艶があり血色は感じにくい。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q4.日焼けすると</legend>
            <label><input type="radio" name="question[burn]" value="Spring">日焼けしやすいが、もどるのも早い。赤くなることも。</label>
            <label><input type="radio" name="question[burn]" value="Summer">赤くなりやすい。吸収せずにすぐに元の色に戻る。</label>
            <label><input type="radio" name="question[burn]" value="Autumn">日焼けしやすく、吸収して黒くなる。元の色に戻りにくい。</label>
            <label><input type="radio" name="question[burn]" value="Winter">やや赤くなり、その後黒くなる。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q5.元の唇の色は？</legend>
            <label><input type="radio" name="question[rip]" value="Spring">淡いサーモンピンクorうすめのベージュ系。</label>
            <label><input type="radio" name="question[rip]" value="Summer">ピンク、ローズ系。</label>
            <label><input type="radio" name="question[rip]" value="Autumn">落ち着いたオレンジorベージュ系。血色は控えめ。</label>
            <label><input type="radio" name="question[rip]" value="Winter">ローズ系。血色がなく青ざめてみえることも。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q6.しっくりくるリップの色は？</legend>
            <label><input type="radio" name="question[goodrip]" value="Spring">コーラル・オレンジ系。明るくツヤがかった発色。</label>
            <label><input type="radio" name="question[goodrip]" value="Summer">ピンク、ローズ系。明るくやわらかな発色。</label>
            <label><input type="radio" name="question[goodrip]" value="Autumn">くすみオレンジ・ブラウン系。落ち着いた発色。</label>
            <label><input type="radio" name="question[goodrip]" value="Winter">フューシャピンク・ボルドー系。鮮やかor深みのある発色。</label>
            <label><input type="radio" name="question[goodrip]" value="Noimage">分からない</label>
            </fieldset>
            
            <fieldset>
            <legend>Q7.反対に苦手なリップの色は？</legend>
            <label><input type="radio" name="question[badrip]" value="Spring">ワイン系。深くて暗めの色だと顔色が悪くなる。</label>
            <label><input type="radio" name="question[badrip]" value="Summer">オレンジ・レッド系。オレンジ系や高発色だと唇だけ目立つ。</label>
            <label><input type="radio" name="question[badrip]" value="Autumn">フューシャピンク・ローズ系。青みが強いと肌から浮いて派手になる。</label>
            <label><input type="radio" name="question[badrip]" value="Winter">ベージュ系、薄い色だとパッとせずにぼやける。</label>
            <label><input type="radio" name="question[badrip]" value="Noimage">分からない</label>
            </fieldset>
            
            <fieldset>
            <legend>Q8.比較的似合うアクセサリーは？</legend>
            <label><input type="radio" name="question[accesary]" value="Spring">キラキラしたツヤありゴールド。</label>
            <label><input type="radio" name="question[accesary]" value="Summer">光沢控えめのプラチナ、シルバー。</label>
            <label><input type="radio" name="question[accesary]" value="Autumn">黄みの強いゴールドorマットゴールド。</label>
            <label><input type="radio" name="question[accesary]" value="Winter">艶のあるプラチナ、シルバー。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q9.ベーシックカラーで得意な色は？</legend>
            <label><input type="radio" name="question[basic]" value="Spring">ベージュやキャメルを着ると、顔色が明るく健康的にみえる。</label>
            <label><input type="radio" name="question[basic]" value="Summer">グレーやネイビーを着ると、肌が白くみえ、上品な印象になる。</label>
            <label><input type="radio" name="question[basic]" value="Autumn">カーキやブラウンを着ても、地味にならずおしゃれな印象になる。</label>
            <label><input type="radio" name="question[basic]" value="Winter">黒を着ても重たくならずに引き締まってシャープな印象になる。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q10.身近な人に褒められる色は？</legend>
            <label><input type="radio" name="question[complimented]" value="Spring">黄色やオレンジ、コーラルピンクなどのあたたかみのあるビタミンカラー。</label>
            <label><input type="radio" name="question[complimented]" value="Summer">淡い水色やラベンダーなどの優しげなパステルカラー。</label>
            <label><input type="radio" name="question[complimented]" value="Autumn">マスタードやテラコッタなどのこっくりとしたアースカラー。</label>
            <label><input type="radio" name="question[complimented]" value="Winter">ロイヤルブルーやマゼンダなどの鮮やかなビビットカラー。</label>
            </fieldset>
            
            <fieldset>
            <legend>Q11.周りからよく言われる第一印象は？</legend>
            <label><input type="radio" name="question[firstimpression]" value="Spring">年齢より若く見える、親しみやすい、明るい。</label>
            <label><input type="radio" name="question[firstimpression]" value="Summer">優しげ、爽やか、品がある。</label>
            <label><input type="radio" name="question[firstimpression]" value="Autumn">落ち着ている、穏やか、ナチュラル。</label>
            <label><input type="radio" name="question[firstimpression]" value="Winter">クール、華やか、印象が強い。</label>
            </fieldset>
            <input type="submit" value="カウントする"/>
        </form>
        <!--<p>戻る</p>-->
  
        <!--[<a href="{{ route('index') }}">STEP2に進む</a>]-->
        [<a href="{{ route('index') }}">HOMEに戻る</a>]
@endsection