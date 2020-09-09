using System;
using System.Collections.Generic;
using System.Linq;

namespace Chess
{
    class ChessBoard
    {
        private int[] Board { get; set; } = new int[8];

        public bool IsSafe()
        {
            throw new NotImplementedException();
        }

        public static bool PlaceQueens(ChessBoard board = null, int column = 0)
        {
            throw new NotImplementedException();
        }

        public static bool PlaceQueens(List<ChessBoard> solutions, ChessBoard board = null, int column = 0)
        {
            throw new NotImplementedException();
        }

        #region Constructors      
        public ChessBoard()
        {

        }
        #endregion

        public override string ToString() => new string(this.Board.Select(n => (char)(n + 48)).ToArray());

        #region All 92 Solutions for 'Eight Queens'
        #endregion

    }
}
