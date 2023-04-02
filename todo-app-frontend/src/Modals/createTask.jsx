import React, { useState } from "react";
import { Button , Modal, ModalHeader, ModalBody, ModalFooter} from 'reactstrap';
const CreateTask = ({modal, toggle, save}) => {
    const [taskName, setTaskName] = useState('');
    const [description, setDescription] = useState('');
    const [counter, setCounter] = useState(0);
    const handleChange = (e) => {
        const {name, value} = e.target;
        if(name === "taskName")
            setTaskName(value);
        else if(name === "description")
            setDescription(value);
    }
    const handleSave = () => {
        let taskObj = {}
        taskObj["Name"] = taskName;
        taskObj["id"] = counter;
        taskObj["Description"] = description;
        save(taskObj);
        setTaskName('');
        setDescription('');
        setCounter(counter + 1);
    }
    
    return (
       <Modal isOpen={modal} toggle={toggle}>
            <ModalHeader toggle={toggle}>Modal Title</ModalHeader>
            <ModalBody>
                <form>
                    <div className="form-group">
                        <label htmlFor="">Task Name</label>
                        <input type="text" className="form-control" value={taskName} onChange={handleChange} name="taskName"/>
                    </div>
                    <label htmlFor="">Description</label>
                    <div className="form-group">
                        <textarea rows="5" className="form-control" value={description} onChange={handleChange} name="description"></textarea>
                    </div>
                </form>
            </ModalBody>
            <ModalFooter>
                <Button color="primary" onClick={handleSave}>Do Something</Button>{' '}
                <Button color="secondary" onClick={toggle}>Cancel</Button>
            </ModalFooter>
       </Modal>
    )
}
export default CreateTask;