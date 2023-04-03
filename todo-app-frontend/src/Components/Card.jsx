import React from "react";

const Card = ({taskObj, index}) => {
    return (
        <div className="card-wrapper mr-5">
            <div className="card-top" style={{"backgroundColor" : "chartreuse"}}></div>
            <div className="task-holder">
                <span className="card-header" style={{"backgroundColor": "#F2FAF1", "borderRadius": "10px"}}>{taskObj.Name}</span>
                <p>{taskObj.Description}</p>
                <div style={{"position": "absolute", "right": "20px", "bottom":"20px"}}>
                    <i className="fa-solid fa-trash"></i>
                    <i className="fa-solid fa-pen-to-square"></i>
                </div>
            </div>
        </div>
    )
}
export default Card;