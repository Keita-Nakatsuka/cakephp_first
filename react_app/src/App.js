import * as React from "react";
//import './output.css';
import { Button } from "@mui/material";

function App() {
  return (
    <div className="bg-slate-600">
    <h1 className="underline">テスト</h1>
    <p>cssテスト</p>
    < div className="m-4 p-1 bg-indigo-300" >Hello World</ div>
    <p className="font-bold underline">testtest</p>
    <p style={{ color: 'red' }}>あいうえお</p>
    <Button>text</Button>
    <Button variant="contained">contained</Button>
    <Button variant="outlined">outlined</Button>
    </div>
  );
}

export default App;
