/*  Home.js */
import { Link } from "react-router-dom";
import { Button } from "@mui/material";
import Fetch from "./fetch";
//import Data from "./datapost";

const Home = () => {
  return (
    <>
      <h1>ホーム</h1>
        <div className="bg-slate-200">
          <h1 className="text-center text-4xl">タイトル</h1>
          < div className="m-4 p-1 bg-indigo-300 underline" >Hello World</ div>
          <p style={{ color: 'red' }}>これはCSSで指定</p>

          <Button>ボタンテキスト</Button>
          <Button variant="contained">contained</Button>
          <Button variant="outlined">outlined</Button>
          <p>NotFoundページは<Link to={`/Notfound`}>こちら</Link></p>
          <p>Fetchページへは<Link to={`/Fetch`}>こちら</Link></p>
          <p>データ送信ページは<Link to={`/Datapost`}>こちら</Link></p>
      </div>
    </>
  );
};

export default Home;