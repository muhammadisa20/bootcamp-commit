-- Membuat Table

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


-- Soal A
INSERT INTO `categories` (`name`) VALUES ('Peralatan Mandi'), ('Mie Instan'), ('Olahan Daging')
INSERT INTO `products` (`id`, `name`, `category_id`) VALUES (NULL, 'Sampoo', '1'), (NULL, 'Sikat Gigi', '1'), (NULL, 'Indomie', '2'), (NULL, 'Mie Sedap', '2'), (NULL, 'Nuget', '3');

-- Soal B
Select categories.id,categories.name as category_name, GROUP_CONCAT(products.name) FROM categories JOIN products ON categories.id = products.category_id GROUP BY products.category_id