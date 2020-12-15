<section>
	<h1 class="smon-section">ABC185 C - Duodecim Ferra</h1>
	<h2 class="smon-section">問題の要約</h2>
	<p>
		長さ $L$ の棒をそれぞれの長さが $1$ 以上の整数になるように $12$ 本に切断する。このとき、切断する場所の選び方は何通りあるか。
	</p>
	<h2 class="smon-section">閑話</h2>
	<p>
		問題タイトルの"Duodecim Ferra"というのはラテン語で、日本語に訳すと「12本の鉄棒」ということになる。元素記号の $\ce{Fe}$ はferrumが語源らしいで。
	</p>
	<h1 class="smon-section">アプローチ</h1>
	<p>
		問題を次のように解釈する。
	</p>
	<p class="bordered-round">
		$x_{0} + \cdots + x_{11} = L-\color{red}{12}$ となるような $\color{red}{0}$ 以上の整数の組 $(x_{0}, \ldots, x_{11})$ はいくつ存在するか。
	</p>
	<p>
		$\newcommand{\dp}{\mathrm{dp}}$
		この問題は動的計画法を用いて簡単に解くことができる。$\dp[i][j]=(\text{$x_{0} + \cdots + x_{i-1} = j$ となるような $x$ の場合の数})$ とする。
	</p>
	<p>
		このとき、空和は $0$ であるから、
		$$\dp[0][0]=1, \dp[0][j]=0(j>0)$$
		また、$x_{0} + \cdots + x_{i-2} = k$ を満たすような $(x_{0},\ldots,x_{i-2})$ を決めれば $x_{i-1}=j-k$ は一意に定まることから、
		$$\begin{align}
		\dp[i][j] &=\dp[i-1][j]+\dp[i-1][j-1]+\cdots+\dp[i-1][0] \\
		&=\dp[i-1][j]+\dp[i][j-1]
		\end{align}$$
	</p>
	<p>
		これで $\dp[12][L-12]$ が解である。ただし、
		$$\dp[j] \leftarrow \dp[j]+\dp[j-1]$$
		として $12$ 回DPを更新すれば十分である。
		<a href="https://atcoder.jp/contests/abc185/submissions/18771749">回答例</a>
	</p>
	<h1 class="smon-section">パスカルの三角形とDP</h1>
	<p>
		さて、この問題は別の解釈もできる。
	</p>
	<p class="bordered-round">
		$\newcommand{\comb}[2]{{}_{#1}C_{#2}}
		\newcommand{\perm}[2]{{}_{#1}P_{#2}}$
		切断する位置を $L-1$ 箇所のうちから重複を許さず $11$ 箇所選ぶ場合の数($\comb{L-1}{11}$)を求めよ。
	</p>
	<p>
		公式解説ではこちらが使われていた。
	</p>
	<p>
		ところで組み合わせを求める方法には積の法則を用いて導かれる
		$$\comb{n}{r}=\frac{n!}{(n-r)!r!}=\frac{n \times \cdots \times (n-r+1)}{1 \times \cdots \times r}$$
		を用いる方法もあるが、パスカルの三角形を用いて求めることもできる。
		このパスカルの三角形を用いる方法は実は上のDPの計算と本質的には同じことである。
	</p>
	<img src="/pages/01_abc185_c/dp_and_pascals_triangle.svg" class="img-center" loading="lazy" width="600" height="500" alt="パスカルの三角形とDPの添字の関係を表した画像" />
	<p>
		問題を一般化し、長さ $n+1$ の棒を $r+1$ 本に切断する場合、解は $\comb{n}{r}$ となる。先に求めたDPを使えば $\dp[n-r][r+1]$ である。つまり $\comb{n}{r}=\dp[i][j]$ となるのは $(i,j)=(n-r,r+1)$ である。
	</p>
</section>
