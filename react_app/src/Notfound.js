/* NotFound.js */

import { Link } from "react-router-dom";

const Notfound = () => {
  return (
    <>
      <h1>お探しのページは見つかりませんでした。</h1>
      <div>
        <Link to={`/`}>ホームに戻る</Link>
      </div>
    </>
  );
};

export default Notfound;