import React, {useState, useEffect} from 'react'

const Fetch = () => {

    const [posts, setPosts] = useState([]);
    const [data, setData] = useState(undefined);
    // fetch("http://localhost/react_server/Jsoncreate/getReactTest")
    // //fetch("https://jsonplaceholder.typicode.com/posts")
    // .then((res) => res.json())
    // // ステート変数のdataに取得結果を格納する
    // .then((json) => setData(json))
    // .catch(() => alert("error"));
    // console.log(data);

    useEffect(() => {
        fetch("http://localhost/react_server/Jsoncreate/getReactTest")
        .then(res => res.json())
        .then(json => setData(json))
    },[])

    useEffect(() => {
        console.log(data);
    } ,[data]) //dataが変更されるたびに実行されるeffect

    return (
        <>
            <div>
                ここはFetchページ
                react_serverからの値を取得している
            </div>
        </>
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