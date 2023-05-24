// import {Average} from './Average'
// import {Total} from './Total'
// import {Popular} from './Popular'
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Example from "./Example";
import { HelloReact } from './HelloReact'


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

