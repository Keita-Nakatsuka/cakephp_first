import * as React from "react";
import { Routes, Route } from "react-router-dom";
import Home from "./Home";
import Notfound from "./Notfound";


function App() {
  return (
    <Routes>
        <Route path='/' element={<Home />} />
        <Route path='*' element={<Notfound />} />
    </Routes>
  );
}

export default App;
