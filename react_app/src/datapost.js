import React, { useState } from 'react';

const Datapost = () => {
  const [formData, setFormData] = useState({
    title: '',
  });

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();

    //最終形はrouter.php　に記載しているエンドポイントを指定する形をとりたいが、今はコントローラーを直に指定
    fetch("http://localhost/react_server/Requestget/index", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(formData)
      //body: formData,
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
  };

  return (
    <>
        <h1 className="font-bold bg-slate-300">react_serverテーブルにフォームからデータ送信して保存する</h1>
        <form onSubmit={handleSubmit}>
        <input type="text" name="title" value={formData.title} onChange={handleChange} />
        <button type="submit">Submit</button>
        </form>
    </>
  );
};

export default Datapost;
