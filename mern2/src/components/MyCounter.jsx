import { useState } from 'react';

const MyCounter = (props) => {

    const [cntr, setCntr] = useState(0)
    function incCntr() {
        setCntr(cntr+props.incBy)
    }

    return (
        <div>
            <div><h2>{cntr}</h2></div>
            <button onClick={incCntr}>+{props.incBy}</button>
        </div>
    )
}
export default MyCounter;