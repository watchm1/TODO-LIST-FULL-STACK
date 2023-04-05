import React from "react";

const Card = ({taskObj, index, handleDetele, handleUpdate}) => {

    const colors = [
        {
            primaryColor : "#5D93E1",
            secondaryColor : "#ECF3FC"
        },
        {
            primaryColor : "#F9D288",
            secondaryColor : "#FEFAF1"
        },
        {
            primaryColor : "#5DC250",
            secondaryColor : "#F2FAF1"
        },
        {
            primaryColor : "#F48687",
            secondaryColor : "#FDF1F1"
        },
        {
            primaryColor : "#B964F7",
            secondaryColor : "#F3F0FD"
        }
    ]
    return (
       <div className="card-wrapper">  
            <div className="card-top" style={{"backgroundColor": colors[index%5].primaryColor}}></div>
            <div className="task-holder">
                <span className="card-header" style={{"backgroundColor": colors[index%5].secondaryColor, "borderRadius": "10px"}}>{taskObj.Name}</span>
                <p className="mt-3">{taskObj.Description}</p>
                <div className="card-icons">
                    <i className="far fa-edit" style={{"color": colors[index%5].primaryColor, "margin-right": "10px", "cursor": "pointer"}} onClick={handleUpdate}></i>
                    <i className="fas fa-trash-alt" style={{"color": colors[index%5].primaryColor, "cursor":"pointer"}} onClick={handleDetele}></i>
                </div>
            </div>
       </div>
    )
}
export default Card;