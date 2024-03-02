import * as React from "react";
import { Routes, Route } from "react-router-dom";
import Home from "./home";
import Notfound from "./Notfound";
import Fetch from "./fetch";
import Datapost from "./datapost";


function App() {
  return (
    <Routes>
        {/* lohochost;3000 はhHome.jsになる */}
        <Route path='/' element={<Home />} />
        <Route path='*' element={<Notfound />} />
        <Route path='/fetch' element={<Fetch />} />
        <Route path='/datapost' element={<Datapost />} />
    </Routes>
  );
}

export default App;
