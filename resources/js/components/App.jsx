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
                    <Route path="/" element={<HelloReact />} />
                </Routes>
            </BrowserRouter>
        </>
    )


}

