import {HelloReact} from './HelloReact'
import {BrowserRouter, Route, Routes} from "react-router-dom";

export function App(){
    return <BrowserRouter>
            <Routes>
                <Route path="/" element={<HelloReact />} />
            </Routes>
        </BrowserRouter>


}
