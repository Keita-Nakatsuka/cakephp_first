import React, {useState, useEffect} from 'react'

const Fetch = () => {

    const [posts, setPosts] = useState([]);
    const [data, setData] = useState(undefined);
    fetch("http://localhost/react_server/Jsoncreate/getReactTest")
    //fetch("https://jsonplaceholder.typicode.com/posts")
    .then((res) => res.json())
    // ステート変数のdataに取得結果を格納する
    .then((json) => setData(json))
    .catch(() => alert("error"));
    console.log(data);
    // useEffect(() => {
    //     fetch('http://localhost/react_server/getReactTest', {method: 'GET'})
    //     .then(res => res.json())
    //     .then(data => {
    //         setPosts(data)
    //     })
    // },[])

    return (
        <></>
        // <div>
        //     <span>fetch.jsコンポーネント</span>
        //     <ul>
        //         {
        //             posts.map(post => 
        //             <li key={post.id}>{post.title}</li>
        //             )
        //         }
        //     </ul>

        // </div>
    )
}

export default Fetch;