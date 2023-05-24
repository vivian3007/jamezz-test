// import {Average} from './Average'
// import {Total} from './Total'
// import {Popular} from './Popular'
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Example from "./Example";
import { HomePage } from './HomePage'
import { Average } from './Average'
import { Popular } from './Popular'
import { Total } from "./Total";


export function App(){
    return (
        <>
            <BrowserRouter>
                <Routes>
                    <Route path="/" element={<HomePage />} />
                    <Route path="/total" element={<Total array={typeof array !== "undefined" ? array : ''}/>} />
                    <Route path="/average" element={<Average array={typeof array !== "undefined" ? array : ''}/>} />
                    <Route path="/popular" element={<Popular array={typeof array !== "undefined" ? array : ''}/>} />
                </Routes>
            </BrowserRouter>
        </>
    )


}

